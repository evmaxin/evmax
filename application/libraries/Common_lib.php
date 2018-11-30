<?php
Class Common_lib {

// Displays Category List for navigation in front pages
public function Categorylist()
{
    $CI = & get_instance();
    $CI->load->model(array('Common_model'));
     $data['categories'] = $CI->Common_model->get_category(0,0,0,1,1);//(1,1)//(getting only parent is vechicles,show_in_navigation_menu is yes)
   //echo $CI->db->last_query();
        return $data;
}
public function menuItems()
{
    $CI = & get_instance();
        $CI->load->model(array('Common_model'));

     $menu  = $CI->Common_model->menuItems();
   //echo $CI->db->last_query();
        return $menu;
}
public function Brandlist()
{
    $CI = & get_instance();
    $CI->load->model(array('Common_model'));
     $data['brands'] = $CI->Common_model->getTableData($tablename='brand', $cols='brand_id,name,category_id');//(1,1)//(getting only parent is vechicles,show_in_navigation_menu is yes)
   //echo $CI->db->last_query();
        return $data;
}
public function Storeslist($num_limit)
{
    $CI = & get_instance();
    $CI->load->model(array('Common_model'));
     $data['stores'] = $CI->Common_model->getStores(0,$num_limit,1);//$id=0,$limit_num=5,$new=1(yes)
   
        return $data;
}
public function limit_text($text, $limit) {
      if (str_word_count($text, 0) > $limit) {
          $words = str_word_count($text, 2);
          $pos = array_keys($words);
          $text = substr($text, 0, $pos[$limit]); //$text = substr($text, 0, $pos[$limit]) . '...';
      }
      return $text;
    }
    public function productImgInHeader()
{
    $CI = & get_instance();
    $CI->load->model(array('Common_model'));
     $data['products'] = $CI->Common_model->get_tabedCatProducts($order="DESC");
   
        return $data;
}

}
