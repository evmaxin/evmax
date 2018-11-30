<?php
class DeliveryLocation_model extends CI_Model {
   //get product details, //$from_home_page to display all products in child catergories from home page
        public function get_details($id=0,$limit=0, $start=0) //$from_home_page to display all products in child catergories
        {                          
                               if ($this->uri->segment(1) === "store") {
                                    //$store_banner_sub_query = "(Select * from (SELECT CASE WHEN sl.slider_category_id= 7 THEN sl.name END as banner from slider sl LEFT JOIN store str ON str.store_id= sl.store_id LEFT JOIN slider_category sc ON sc.slider_category_id= sl.slider_category_id where str.store_slug='".$this->uri->segment(2)."') as banner where banner IS NOT NULL) as banner,"; //for getting banner used in store page
                                    //$store_logo_sub_query = "(Select * from (SELECT CASE WHEN sl.slider_category_id= 8 THEN sl.name END as logo from slider sl LEFT JOIN store str ON str.store_id= sl.store_id LEFT JOIN slider_category sc ON sc.slider_category_id= sl.slider_category_id where str.store_slug='".$this->uri->segment(2)."') as logo where logo IS NOT NULL) as logo,"; //for getting banner used in store page
                                }
                                $this->db->select("p.*,st.state_name,st.state_id");
				              $this->db->from('delivery_location p');
                               
                                // $this->db->join('store s','s.store_id=prod.store_id','LEFT');
                                 $this->db->join('state st','st.state_id=p.state','left'); 
                                // $this->db->join('slider sl','st.store_id=sl.store_id','LEFT');
                               if(isset($id) && $id>0){
				$this->db->where('p.id', $id); 
                              //   $this->db->group_by('patr.attribute_type_id');
				}
                            if($this->uri->segment(1)=="store")
                              {
                                  $this->db->where('st.store_slug', $this->uri->segment(2)); 
                              }
                              if(isset($id) && ($id==0)){
                               $this->db->group_by('p.id');
                               //if($limit>0 && $start>0){
                               $this->db->limit($limit, $start);
                               }
                            
                               
                               
                               
                              //  }
				$query = $this->db->get();
                            
				
                return $query->result();
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
            	$this->db->select('slider_id,name,slider_text,link_to_category,slider_category_id');
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