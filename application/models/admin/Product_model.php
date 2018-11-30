<?php
class Product_model extends CI_Model {
   //get product details, //$from_home_page to display all products in child catergories from home page
        public function get_product($id=0,$cat_id=array(),$attribute_ids=array(),$limit=0, $start=0,$from_home_page=0,$new_arrvial_flag=0,$child_img=0) //$from_home_page to display all products in child catergories
        {                          
                                   
                                   $store_banner_sub_query="";//it's for store banner
                                   $store_logo_sub_query="";//it's for store logo display in 
                                    if ($this->uri->segment(1) === "store") {
                                    //$store_banner_sub_query = "(Select * from (SELECT CASE WHEN sl.slider_category_id= 7 THEN sl.name END as banner from slider sl LEFT JOIN store str ON str.store_id= sl.store_id LEFT JOIN slider_category sc ON sc.slider_category_id= sl.slider_category_id where str.store_slug='".$this->uri->segment(2)."') as banner where banner IS NOT NULL) as banner,"; //for getting banner used in store page
                                    //$store_logo_sub_query = "(Select * from (SELECT CASE WHEN sl.slider_category_id= 8 THEN sl.name END as logo from slider sl LEFT JOIN store str ON str.store_id= sl.store_id LEFT JOIN slider_category sc ON sc.slider_category_id= sl.slider_category_id where str.store_slug='".$this->uri->segment(2)."') as logo where logo IS NOT NULL) as logo,"; //for getting banner used in store page
                                }
                                $this->db->select("$store_banner_sub_query $store_logo_sub_query prod.store_id,st.store_name,st.store_slug,GROUP_CONCAT(DISTINCT(`pimg`.`image_path`)) as image_path,GROUP_CONCAT(`pimg`.`admin_uploaded`) as admin_uploaded,GROUP_CONCAT(`pimg`.`make_primary`)as make_primary,GROUP_CONCAT(DISTINCT(`pimg`.`image_id`)) as image_ids,patr.attribute_type_id,GROUP_CONCAT(patr.attribute_id) as attribute_id,pcat.category_id,prod.product_id,prod.name,prod.offer_price,prod.inventory,prod.full_description,prod.upload_date,prod.actual_price,prod.sku,prod.meta_title,prod.meta_keywords,prod.meta_description,prod.speed,prod.rrange,prod.motor_output,prod.batterytype,prod.wheel_diameter,prod.need_registration,prod.need_driving_license,prod.valid_from,prod.valid_to,prod.commission,cat.category_name,scat.name as scatname,m.model_name as model,v.name as varient,my.manufacture_year as manf_year,prod.special_offer,prod.special_offer_text,prod.exchange_benefit,prod.exchange_note,prod.offer_from_date,prod.offer_to_date,prod.exchange_from_date,prod.exchange_to_date,prod.delivery_charges,prod.voltage,prod.warranty,prod.am,prod.manufacture_year_id,prod.commission,prod.coupon_value,prod.product_gst,prod.product_sgst,prod.product_cgst,prod.shipping_gst,prod.shipping_cgst,prod.shipping_sgst,prod.handling_gst,prod.handling_cgst,prod.handling_sgst,prod.delivery_cost,prod.handling_cost");
				              $this->db->from('product prod');
                                $this->db->join('product_attributes patr','prod.product_id=patr.product_id','LEFT');
								
                              
                                $this->db->join('product_images pimg','prod.product_id=pimg.product_id','LEFT');
								
								
                                $this->db->join('product_category pcat','prod.product_id=pcat.product_id','LEFT');
                                $this->db->join('category cat','cat.category_id=pcat.product_category_id','LEFT');
                                $this->db->join('sub_category scat','scat.sub_category_id=pcat.sub_category_id','LEFT');
                                 $this->db->join('store st','st.store_id=prod.store_id','LEFT');
                                 $this->db->join('m_registration make','make.m_registration_id=prod.make_id','left'); // causing product_id ambiguous dont touch now
                                 $this->db->join('model m','prod.model_id=m.model_id','left'); // causing product_id ambiguous dont touch now
                $this->db->join('variant v','prod.variant_id=v.variant_id','left');
                $this->db->join('manufacture_year my','prod.manufacture_year_id=my.manufacture_year_id','left');
                                // $this->db->join('slider sl','st.store_id=sl.store_id','LEFT');
                               if(isset($id) && $id>0){
				$this->db->where('prod.product_id', $id); 
                              //   $this->db->group_by('patr.attribute_type_id');
				}
			if(isset($child_img) && $child_img>0){
				$this->db->where('pimg.childImage', 0); 
                              //   $this->db->group_by('patr.attribute_type_id');
				}
                                if($this->uri->segment(1)=="store")
                              {
                                  $this->db->where('st.store_slug', $this->uri->segment(2)); 
                              }
                                if(is_array($attribute_ids)&&(count($attribute_ids)>0)){
				$this->db->where_in('patr.attribute_id', $attribute_ids); 
                                }
                                if(is_array($cat_id)&&(count($cat_id)>0) && ($this->uri->segment('1') !=="store")){
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
		       public function get_product_Subinfo($id=0) 
            {                          
                               
                  $this->db->select("GROUP_CONCAT(DISTINCT(`pimg`.`image_path`)) as image_path,GROUP_CONCAT(`pimg`.`admin_uploaded`) as admin_uploaded,GROUP_CONCAT(`pimg`.`childImage`) as childImages,GROUP_CONCAT(`pimg`.`make_primary`)as make_primary,GROUP_CONCAT(DISTINCT(`pimg`.`image_id`)) as image_ids");
				  $this->db->from('product_images pimg');

				  $this->db->where('pimg.product_id', $id); 
										
                              
				  $query = $this->db->get();
                            
				
                   return $query->result();
            }
		
		
		 public function get_product_childImages($id=0)
		 {
			 
			                  $this->db->select("image_id,image_path,childImage,make_primary");
				              $this->db->from('product_images');
                             if(isset($id) && $id>0){
				                 $this->db->where('product_id', $id); 
							    $this->db->where('childImage !=0');
							   
                              //   $this->db->group_by('patr.attribute_type_id');
				            }
			                    $query = $this->db->get();
                 
			              return $query->result_array();
		 }
        
		
		
        //This is for get all child and self ids of category and category name in category controller->index
        public function getChildCategories($id=0)
        {
            if(isset($id)&&($id>0)){
                   $query = $this->db->query("SELECT GROUP_CONCAT(lv SEPARATOR ',') as child_ids,GROUP_CONCAT(name SEPARATOR ',') as category_names FROM 
    (SELECT 
     @pv:=(SELECT GROUP_CONCAT(category_id SEPARATOR ',') FROM category WHERE parent_id IN (@pv) OR category_id IN (@pv)) AS lv,
     @nv:=(SELECT GROUP_CONCAT(category_name SEPARATOR ',') FROM category WHERE parent_id IN (@nv) OR category_id IN (@nv)) AS name	
    FROM category JOIN (SELECT @pv:=$id)tmp JOIN (SELECT @nv:=$id)tmps WHERE parent_id IN (@pv) OR category_id IN (@pv)) a");
                   //$query = $this->db->get();
                      
		
                return $query->result_array();
            } else {
                $this->db->select("GROUP_CONCAT(category_id SEPARATOR ',') as child_ids,GROUP_CONCAT(category_name SEPARATOR ',') as category_names,parent_id,category_type_id,status");
        $this->db->from('category');
         $query = $this->db->get();

        return $query->result_array();
            }
             
                
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
        public function updateCategory($parameters,$id)
        {
                  // $this->attribute_type = $this->input->post('attribute_type'); // please read the below note
               	    $this->db->update('product_category', $parameters, array('product_id' => $id));
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
                 //  $store_id = $this->session->userdata('admin_data')['store_id'];
              $store_id =1;
            	$this->db->select('slider_id,name,slider_text,link_to_category,slider_category_id,link_url,display_order,product_banner,product_category_id,product_banner_type_id');
				$this->db->from('slider');
                                if(isset($slider_category_id) && $slider_category_id>0){
				$this->db->where('slider_category_id', $slider_category_id); 
				}
                                $this->db->order_by('display_order','ASC');
                                if(isset($store_id) && ($store_id==1)){
				$this->db->where('store_id', $store_id); 
                                  }
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
		//set primary image
		 public function set_primaryimages($pid,$imageId,$oldSetPrimaryImage)
		 {
	       if(isset($pid) &&($pid>0))
			   
			{  
    			if($oldSetPrimaryImage!=0)
					 {
						   $this->db->set('make_primary', '0', FALSE);
						   $this->db->where("image_id",$oldSetPrimaryImage);
						   $this->db->update('product_images');
					 }
					 
                
                     $this->db->set('make_primary', '1', FALSE);
                     $this->db->where("image_id",$imageId);
                      $this->db->update('product_images');
                
               
		  
            }
			  return true;
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
         public function getSearchProducts($id=0,$limit=0, $start=0) { //$from_home_page to display all products in child catergories
            //$option =  "";
             $value = "";
             if(isset($_REQUEST['country'])&&($_REQUEST['country']!='')){
              $this->session->set_userdata("value",$_REQUEST['country']);
              $value = $this->session->userdata("value");
             }
        
        $this->db->select("prod.store_id,st.store_name,st.store_slug,GROUP_CONCAT(DISTINCT(`pimg`.`image_path`)) as image_path,GROUP_CONCAT(DISTINCT(`pimg`.`image_id`)) as image_ids,patr.attribute_type_id,GROUP_CONCAT(patr.attribute_id) as attribute_id,pcat.category_id,(SELECT GROUP_CONCAT(DISTINCT(category_name)) as category_name 
                    FROM category
                   WHERE category_id = pcat.category_id) as category_name,prod.product_id,prod.name,prod.offer_price,prod.inventory,prod.full_description,prod.upload_date,prod.actual_price,prod.sku");
        $this->db->from('product prod');
        $this->db->join('product_attributes patr', 'prod.product_id=patr.product_id', 'INNER');
        $this->db->join('product_images pimg', 'prod.product_id=pimg.product_id', 'INNER');
        $this->db->join('product_category pcat', 'prod.product_id=pcat.product_id', 'INNER');
        $this->db->join('category cat', 'cat.category_id=pcat.product_category_id', 'INNER');
        $this->db->join('store st', 'st.store_id=prod.store_id', 'INNER');
        //  $this->db->join('slider sl','st.store_id=sl.store_id','LEFT');
        if (isset($value) && ($value != "")) {
            $this->db->like('prod.name', $value);
            
        }
       
     // $this->db->where_in('cat.category_id', array('31','32','33'));
     $this->db->group_by('prod.product_id');


                    //if($limit>0 && $start>0){
                         $this->db->limit($limit, $start);
                            //   }
        $query = $this->db->get();


        return $query->result();
    }

}