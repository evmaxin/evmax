<?php
class Product_model extends CI_Model {
    //get product details, //$from_home_page to display all products in child catergories from home page
        public function get_product($id=0,$cat_id=array(),$attribute_ids=array(),$limit=0, $start=0,$from_home_page=0,$new_arrvial_flag=0) //$from_home_page to display all products in child catergories
        {
                                $this->db->select("a.username as admin_email,prod.store_id,st.store_name,st.store_slug,GROUP_CONCAT(DISTINCT(`pimg`.`image_path`)) as image_path,GROUP_CONCAT(DISTINCT(`pimg`.`image_id`)) as image_ids,patr.attribute_type_id,GROUP_CONCAT(patr.attribute_id) as attribute_id,pcat.category_id,prod.product_id,prod.name,prod.offer_price,prod.inventory,prod.full_description,prod.upload_date,prod.actual_price,prod.sku,tax.gst_percentage as gst,prod.coupon_value,prod.product_gst,prod.product_cgst,prod.product_sgst,prod.shipping_gst,prod.shipping_cgst,prod.shipping_sgst,prod.handling_gst,prod.handling_cgst,prod.handling_sgst,prod.delivery_cost,prod.handling_cost");
				$this->db->from('product prod');
                                $this->db->join('product_attributes patr','prod.product_id=patr.product_id','LEFT');
                                $this->db->join('product_images pimg','prod.product_id=pimg.product_id','LEFT');
                                $this->db->join('product_category pcat','prod.product_id=pcat.product_id','LEFT');
                                $this->db->join('category cat','cat.category_id=pcat.product_category_id','LEFT');
                                $this->db->join('store st','st.store_id=prod.store_id','LEFT');
                                 $this->db->join('admin a','a.store_id=st.store_id','inner');
                               $this->db->join('gst tax','tax.category_type_id=pcat.category_type_id','LEFT');
                           //    $this->db->join('attributes atr','atr.attribute_id=patr.attribute_id','INNER');
                            //   $this->db->join('attribute_type_mas atype','atype.attribute_type_id=patr.attribute_type_id','INNER');
				if(isset($id) && $id>0){
				$this->db->where('prod.product_id', $id);
                                $this->db->where('pimg.make_primary', 1);
                              //   $this->db->group_by('patr.attribute_type_id');
				}
                                if(is_array($attribute_ids)&&(count($attribute_ids)>0)){
				$this->db->where_in('patr.attribute_id', $attribute_ids); 
                                }
                                if(is_array($cat_id)&&(count($cat_id)>0)){
                                $this->db->where_in('pcat.category_id', $cat_id); // multiple category id's
                                // $this->db->or_where_in('cat.parent_id', $cat_id); // multiple parent id's of category
                                }
                                if((is_array($cat_id)&&(count($cat_id)>0)) && (isset($from_home_page)&&($from_home_page>0))){
                                // $this->db->or_where_in('cat.parent_id', $cat_id); // multiple parent id's of category ,display all products in child catergories like men and sub categories of that
                                }
                              
                               $this->db->order_by('prod.upload_date','DESC');
                               if(isset($id) && ($id==0)){
                               $this->db->group_by('prod.product_id');
                               //if($limit>0 && $start>0){
                               $this->db->limit($limit, $start);
                               }
                               //$this->db->order_by(strtotime("prod.upload_date", '%d-%b-%Y'), "desc");
                               
                               
                               
                              //  }
				$query = $this->db->get();
                            
				
                return $query->result();
        }
        //This is for get all child and self ids of category and category name in category controller->index
        public function getChildCategories($id)
        {
                   $query = $this->db->query("SELECT GROUP_CONCAT(lv SEPARATOR ',') as child_ids,GROUP_CONCAT(name SEPARATOR ',') as category_names FROM 
    (SELECT 
     @pv:=(SELECT GROUP_CONCAT(category_id SEPARATOR ',') FROM category WHERE parent_id IN (@pv) OR category_id IN (@pv)) AS lv,
     @nv:=(SELECT GROUP_CONCAT(category_name SEPARATOR ',') FROM category WHERE parent_id IN (@nv) OR category_id IN (@nv)) AS name	
    FROM category JOIN (SELECT @pv:=$id)tmp JOIN (SELECT @nv:=$id)tmps WHERE parent_id IN (@pv) OR category_id IN (@pv)) a");
                   //$query = $this->db->get();
                      
		//echo $this->db->last_query();	
                return $query->result_array();
                
        }

        public function insert($parameters)
        {
            $this->db->insert('product', $parameters);
            return $this->db->insert_id();
        }
        public function insert_product_images($parameters)
        {
            $this->db->insert('product_images', $parameters);
            return true;
        }
        public function insert_product_categories($parameters)
        {
            $this->db->insert('product_category', $parameters);
            return true;
        }

        public function update($parameters,$id)
        {
                  // $this->attribute_type = $this->input->post('attribute_type'); // please read the below note
               	    $this->db->update('product', $parameters, array('product_id' => $id));
                  return true;
        }
        public function get_productimages($product_id=0,$images_array=array(),$group=0)
        {
            	$this->db->select('image_path,product_id');
				$this->db->from('product_images');
                                if(isset($product_id) && $product_id>0){
				$this->db->where('product_id', $product_id); 
				}
                                if(isset($images_array) && count($images_array)>0){
                                    
				$this->db->where_in('image_id', $images_array); 
				}
                                if(isset($group) && $group>0){
                                $this->db->group_by('product_id');
                                }
                           $query = $this->db->get();
                           	
                return $query->result();
        }
         public function get_sliderimages($id=0,$slider_category_id=0)
        {
            	$this->db->select('slider_id,name,slider_text,link_to_category');
				$this->db->from('slider');
                                if(isset($slider_category_id) && $slider_category_id>0){
				$this->db->where('slider_category_id', $slider_category_id); 
				}
                                $this->db->order_by('display_order','ASC');
                           $query = $this->db->get();
                           	
                return $query->result();
        }
        public function destroyImages($prod_id,$where_cond) {
            if((isset($prod_id)&&($prod_id>0))&&(isset($where_cond) && count($where_cond>0)))
            {
               // print_r($where_cond); exit;
              foreach($where_cond as $key=>$val){
                
                $this->db->where("image_id",$val);
                $this->db->delete('product_images');
                 }
                  return true;
            }
            
        }
        //to get most viewed products in front pages
         public function updateviewcount($product_id=0)
        {   
             if(isset($product_id) &&($product_id>0))
             {
        $this->db->where('product_id', $product_id);
        $this->db->set('view_count', 'view_count+1', FALSE);
        $this->db->update('product');
            }
        }
          public function getSimilarProducts($id=0) 
        {
                                $this->db->select("pimg.image_path,prod.product_id,prod.name,prod.offer_price,prod.inventory,prod.full_description,prod.upload_date,prod.actual_price,prod.sku");
				$this->db->from('product prod');
                                $this->db->join('product_images pimg','prod.product_id=pimg.product_id','INNER');
                                $this->db->join('product_category pcat','pcat.product_id=prod.product_id','INNER');
                                   if(isset($id) &&($id>0))
                         {
                                $this->db->where("pcat.category_id = (SELECT `category_id` FROM `product_category` where product_id=$id)", NULL, FALSE);
                                 $this->db->where_not_in('prod.product_id', $id);
                         }
                                $this->db->order_by('prod.upload_date',"DESC");
                           
                               
                                $this->db->limit('12');
                                $this->db->group_by('prod.product_id');
				$query = $this->db->get();
                            
				
                return $query->result();
        }
        
        
		 

}