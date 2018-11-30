<?php
class Ajax_model extends CI_Model {
//get product details, //$from_home_page to display all products in child catergories from home page
         public function get_product($id=0,$cat_id=array(),$attribute_ids=array(),$limit=0, $start=0)
        {
                                $this->db->select('prod.store_id,st.store_name,GROUP_CONCAT(DISTINCT(`pimg`.`image_path`)) as image_path,GROUP_CONCAT(DISTINCT(`pimg`.`image_id`)) as image_ids,patr.attribute_type_id,GROUP_CONCAT(DISTINCT(patr.attribute_id)) as attribute_id,pcat.category_id,prod.product_id,prod.name,prod.offer_price,prod.inventory,prod.full_description,prod.upload_date,prod.actual_price,prod.sku');
				$this->db->from('product prod');
                                $this->db->join('product_attributes patr','prod.product_id=patr.product_id','LEFT');
                                $this->db->join('product_images pimg','prod.product_id=pimg.product_id','LEFT');
                                $this->db->join('product_category pcat','prod.product_id=pcat.product_id','LEFT');
                                $this->db->join('category cat','cat.category_id=pcat.product_category_id','LEFT');
                                $this->db->join('store st','st.store_id=prod.store_id','LEFT');
				if(isset($id) && $id>0){
				$this->db->where('prod.product_id', $id); 
                              //   $this->db->group_by('patr.attribute_type_id');
				}
                                 if($this->session->userdata('first_segment_value')=="store")
                              {
                                  $this->db->where('st.store_slug', $this->session->userdata('second_segment_value')); 
                              }
                                if(is_array($attribute_ids)&&(count($attribute_ids)>0)){
                               // $this->db->where("((`patr`.`attribute_id` ='33' AND `patr`.`attribute_type_id` ='1') OR (`patr`.`attribute_id` ='34' AND `patr`.`attribute_type_id` ='2'))"); 
				$this->db->where_in('patr.attribute_id', $attribute_ids); 
                                
                                }
                                if((is_array($cat_id)&&(count($cat_id)>0)) && ($this->session->userdata('first_segment_value')!=="store")){
                                $this->db->where_in('pcat.category_id', array_unique($cat_id)); // multiple category id's
                                // $this->db->or_where_in('cat.parent_id', $cat_id); // multiple parent id's of category
                                }
                                 $this->db->where('prod.archive', 0);
                               if(isset($id) && ($id==0)){
                               $this->db->group_by('prod.product_id');
                               //if($limit>0 && $start>0){
                              // $this->db->limit($limit, $start);
                               }
                               $this->db->order_by('prod.upload_date','DESC');
                              //  }
				$query = $this->db->get();
                            
				
                return $query->result();    
        }
     //Get filterresults    
            public function getFilterResults($id=0,$cat_id=array(),$attribute_ids=array(),$limit=0, $page=0,$catgeroy_ids=0,$make=0,$model=0,$varient=0)
        {
                $offset = 9*($page);
                $limit = 9;
               $cat_cond="";
               $size_cond="";
               $color_cond="";
               $brand_cond="";
               $fabric_cond="";
               $store_cond = "";
			   $make_cond="";
			   $model_cond="";
			   $varient_cond="";
                 if ($this->session->userdata('first_segment_value') == "store") {
            $store_cond = "AND items.store_slug ='" . $this->session->userdata('second_segment_value') . "'";
            
        }
                if((is_array($cat_id)&&(count($cat_id)>0)) && ($this->session->userdata('first_segment_value')!=="store")){
                                //$this->db->where_in('pcat.category_id', $cat_id); // multiple category id's
                             //  
                                }
                                $color_ids = array();
                                $size_ids = array();
                                $brand_ids= array();
                                $fabric_ids= array();
                                foreach ($attribute_ids as $spilts) {
                                    $pieces = explode("~", $spilts);
                                    
                                    if($pieces[1]=='color')
                                    {
                                        array_push($color_ids, $pieces[0]); 
                                    }
                                    else if($pieces[1]=='size')
                                    {
                                        array_push($size_ids, $pieces[0]); 
                                    }
                                    else if($pieces[1]=='brand')
                                    {
                                        array_push($brand_ids,$pieces[0]); 
                                    }
                                    else if($pieces[1]=='fabric')
                                    {
                                        array_push($fabric_ids, $pieces[0]); 
                                    }
                                }
                               // $size_ids =" ";
                                //$color_ids ="AND ";
                               // $size_ids_val = implode(' OR ', array_map(function($x) { return "FIND_IN_SET('$x', items.size_id)"; }, $size_ids));
                                $color_ids_val = implode(' OR ', array_map(function($y) { return "FIND_IN_SET('$y', items.color_id)"; }, $color_ids));
                                
                               // $brand_ids_val = implode(' OR ', array_map(function($y) { return "FIND_IN_SET('$y', items.brand_id)"; }, $brand_ids));
                               // $fabric_ids_val = implode(' OR ', array_map(function($y) { return "FIND_IN_SET('$y', items.fabric_id)"; }, $fabric_ids));
                                
                                //$size_ids = implode(",", $size_ids);
                                //print_r($size_ids);exit;
                                //$brand_ids = implode(",", $brand_ids);
                               // $fabric_ids = implode(",", $fabric_ids);
                                
                         //$test=array('69','70');
                          $final_cat_ids = implode(",", $cat_id );  
                  $cat_cond= "items.category_id IN($final_cat_ids)";
                 // $explode(",", $attribute_ids);
                  if(!empty($size_ids)){
                 $size_cond= "AND ";// first where no AND
                  }
                  if(!empty($color_ids)){
                  $color_cond= "AND ";
                  }
                  if(!empty($brand_ids)){
                  $brand_cond= "AND ";
                  }
                  if(!empty($fabric_ids)){
                  $fabric_cond= "AND ";
                  }
				  if(isset($make)&&($make)>0){
				   $make_cond = "AND make_id=$make";
				  }
				   if(isset($model)&&($model)>0){
				   $model_cond = "AND model_id=$model";
				  }
				   if(isset($varient)&&($varient)>0){
				   $varient_cond = "AND variant_id=$varient";
				  }
			   //$model_cond="";
			   //$varient_cond="";
				  
 $query = $this->db->query("SELECT items.*
FROM(SELECT `prod`.`store_id`, `st`.`store_name`, `st`.`store_slug`, GROUP_CONCAT(DISTINCT(`pimg`.`image_path`)) as image_path, GROUP_CONCAT(DISTINCT(`pimg`.`image_id`)) as image_ids, `patr`.`attribute_type_id`, GROUP_CONCAT(patr.attribute_id) as attribute_id, `pcat`.`category_id`, `prod`.`product_id`, `prod`.`name`, (prod.offer_price-prod.coupon_value) as offer_price, `prod`.`inventory`, `prod`.`full_description`, `prod`.`upload_date`,`prod`.`actual_price`,`prod`.`sku`,prod.make_id,prod.model_id,prod.variant_id,
     GROUP_CONCAT(DISTINCT(IF(t.ATTRIBUTE_TYPE = 'color', a.attribute_id, null))) as color_id,
     GROUP_CONCAT(DISTINCT(IF(t.ATTRIBUTE_TYPE = 'color', a.NAME, null))) as color
     FROM `product` `prod`
     LEFT JOIN `product_attributes` `patr` ON `prod`.`product_id`=`patr`.`product_id`
     LEFT JOIN `attributes` `a` ON `a`.`attribute_id`=`patr`.`attribute_id`
     LEFT JOIN  attribute_type_mas t ON a.attribute_type_id =t.attribute_type_id
     LEFT JOIN `product_images` `pimg` ON `prod`.`product_id`=`pimg`.`product_id` 
     LEFT JOIN `product_category` `pcat` ON `prod`.`product_id`=`pcat`.`product_id`
     LEFT JOIN `category` `cat` ON `cat`.`category_id`=`pcat`.`product_category_id`
     LEFT JOIN `store` `st` ON `st`.`store_id`=`prod`.`store_id` 
     where `prod`.`archive` =0 and pimg.make_primary=1 and pimg.admin_uploaded=1 GROUP BY `prod`.`product_id`) as items
  where $cat_cond $make_cond $model_cond $varient_cond $color_cond $color_ids_val $store_cond ORDER BY items.upload_date DESC limit $offset ,$limit");
          return $query->result();
        }

        
}