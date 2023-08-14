<?php

use function DeliciousBrains\WPMDB\Container\DI\value;

/**
 * Create a new table class that will extend the WP_List_Table
 */
class event_List extends WP_List_Table
{
    /**
     * Prepare the items for the table to process
     *
     * @return Void
     */

    public function __construct()
    {

        parent::__construct(
            array(
                'singular' => 'singular_form',
                'plural'   => 'plural_form',
                'ajax'     => false
            )
        );
    }
    public function prepare_items()
    {
        $columns = $this->get_columns();
        $hidden = $this->get_hidden_columns();
        $sortable = $this->get_sortable_columns();

        $data = $this->table_data();
        usort($data, array(&$this, 'sort_data'));

        $perPage = 5;
        $currentPage = $this->get_pagenum();
        $totalItems = count($data);
        $search = isset($_REQUEST['s']) ? sanitize_text_field($_REQUEST['s']) : '';
        $this->set_pagination_args(array(
            'total_items' => $totalItems,
            'per_page'    => $perPage,
            's' => $search, // Add the search parameter to the query
        ));

        $data = array_slice($data, (($currentPage - 1) * $perPage), $perPage);

        $this->_column_headers = array($columns, $hidden, $sortable);
        $this->items = $data;
        // $this->process_bulk_action();
        // $this->extra_tablenav();
    }

    /**
     * Override the parent columns method. Defines the columns to use in your listing table
     *
     * @return Array
     */
    public function get_columns()
    {


        $columns = array(
            'cb'    => '<input type="checkbox" />', // this is all you need for the bulk-action checkbox
            'id'          => 'ID',
            'title'       => 'Title',
            'content'     => 'Content',
            'event_date'  => 'event_date',
            'featured_image' => 'featured_image',
        );

        return $columns;
    }

    /**
     * Define which columns are hidden
     *
     * @return Array
     */
    public function get_hidden_columns()
    {
        return array();
    }

    /**
     * Define the sortable columns
     *
     * @return Array
     */
    public function get_sortable_columns()
    {
        return array('event_date' => array('event_date', true));
    }

    /**
     * Get the table data
     *
     * @return Array
     */
    private function table_data()
    {
        $data = array();

        $search_value = isset($_REQUEST['s']) ? esc_attr($_REQUEST['s']) : '';
        // echo '<pre>';
        // print_r($search_item);
        // echo '</pre>';

        $args = array(
            'post_type' => 'event',
            'post_status' => 'publish',
            's' => $search_value
        );


        $event_list = new WP_Query($args);
        if ($event_list->have_posts()) {
            while ($event_list->have_posts()) {
                $event_list->the_post();
?>
<?php
                // echo '<pre>';
                // print_r(get_the_post_thumbnail(get_the_ID(), 'thumbnail'));
                // echo '</pre>';
                $data[] = array(
                    'id'          => get_the_ID(),
                    'title'       => get_the_title(),
                    'content'     =>  get_the_content(),
                    'event_date'  => get_post_meta(get_the_ID(), 'event_date', true),
                    'featured_image' => get_the_post_thumbnail(get_the_ID(), 'thumbnail')
                );
            }
        }
        return $data;
    }

    /**
     * Define what data to show on each column of the table
     *
     * @param  Array $item        Data
     * @param  String $column_name - Current column name
     *
     * @return Mixed
     */
    public function column_default($item, $column_name)
    {
        switch ($column_name) {
            case 'id':
            case 'title':
            case 'content':
            case 'event_date':
            case 'featured_image':
                return $item[$column_name];

            default:
                return print_r($item, true);
        }
    }

    /**
     * Allows you to sort the data by the variables set in the $_GET
     *
     * @return Mixed
     */
    private function sort_data($a, $b)
    {
        // Set defaults
        $orderby = 'title';
        $order = 'asc';

        // If orderby is set, use this as the sort column
        if (!empty($_GET['orderby'])) {
            $orderby = $_GET['orderby'];
        }

        // If order is set use this as the order
        if (!empty($_GET['order'])) {
            $order = $_GET['order'];
        }
        $result = strcmp($a[$orderby], $b[$orderby]);

        if ($order === 'asc') {
            return $result;
        }

        return -$result;
    }
    function column_id($item)
    {
        $actions = array(
            'edit'      => sprintf('<a href="?page=%s&action=%s&element=%s&pages=event">' . __('Edit', 'event-managment') . '</a>', $_REQUEST['page'], 'edit', $item['id']),
            'delete'    => sprintf('<a href="?page=%s&action=%s&element[]=%s">' . __('delete', 'event-managment') . '</a>', $_REQUEST['page'], 'delete', $item['id'])
        );

        return sprintf('%1$s %2$s', $item['id'], $this->row_actions($actions));
    }
    public function column_cb($item)
    {
        return sprintf(
            '<input type="checkbox" name="delete[]" value="%s" />',
            $item['id']
        );
    }

    public function get_bulk_actions()
    {

        return array(
            'delete' => __('Delete', 'event-managment'),
            // 'save'   => __('Save', 'event-managment'),
        );
    }
    public function extra_tablenav($which)
    {

        if ($which === 'top') {
            $search_value = isset($_REQUEST['s']) ? esc_attr($_REQUEST['s']) : '';
            echo '<div class="alignleft actions">
                <label for="event-search" class="screen-reader-text">' . __('Search Events') . '</label>
                <input type="search" id="event-search" name="s" value="' . $search_value . '"/>
                <input type="submit" name="search_item" id="" class="button" value="' . __('Search Events') . '">
            </div>';
        }
        // echo '<pre>';
        // print_r($search_value);
        // echo '</pre>';
        // die;
    }
}

$exampleListTable = new event_List();
$exampleListTable->prepare_items();
?>
<div class="wrap">
    <form method="get">
        <input type="hidden" name="page" value="<?php echo $_REQUEST['page'] ?>" />

        <div id="icon-users" class="icon32"></div>
        <h2>Example List Table Page</h2>
        <?php $exampleListTable->display(); ?>
    </form>
</div>