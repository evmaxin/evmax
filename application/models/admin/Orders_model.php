<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Orders_model extends CI_Model {

        public function get_ordersDetails($id=0,$order_num=0)
        {
            
            $this->db->select("sh.name as shipper,o.tracking_id,dl.company_name as dloc,dl.person_name as dlcontact,dl.plot_flat as plot_flat,dl.address1 as dlad1,dl.address2 as dlad2,dl.city as dlcity,dl.state as dlstate,dl.pincode as dlpin,o.pickup_location_id,s.state_name as plstate_name,pl.pickup_loc_name,pl.address1 as pladd1,pl.address2 as pladd2,pl.city as plcity,pl.country as plcntry,pl.pincode as plpin,o.order_id,o.tax as gst,o.order_number,o.order_date,o.status,o.deliveryaddress_type,c.*,od.*,(SELECT sum((total_price)+(handling_cost)+(delivery_cost))
                FROM order_detail where order_id=$id) as grant_total,ca.*,GROUP_CONCAT(
  DISTINCT CONCAT(p.name,',',p.product_id,',',p.offer_price,',',od.quantity,',',st.store_name,',',p.coupon_value,',',od.total_price,',',od.delivery_cost,',',od.handling_cost,',',od.handling_gst,',',od.shipping_gst,',',od.product_gst)  
  ORDER BY p.product_id ASC 
  SEPARATOR ';'
) prod_array");
                $this->db->from("orders o");
               $this->db->join('customers c','c.id=o.customer_id','inner');
               $this->db->join('customer_address ca','ca.customer_id=o.customer_id','inner');
               $this->db->join('order_detail od','od.order_id=o.order_id','inner');
               $this->db->join('product p','p.product_id=od.product_id','inner');
               $this->db->join('store st','st.store_id=p.store_id','LEFT');
               $this->db->join('pickup_location pl','o.pickup_location_id=pl.id','LEFT');
               $this->db->join('delivery_location dl','o.delivery_location_id=dl.id','LEFT');
                $this->db->join('state s','s.state_id=pl.state','LEFT');
                 $this->db->join('shipping sh','sh.shipping_id=o.shipping_id','LEFT');
                //$this->db->join('attributes a','a.attribute_id=opa.attribute_id','inner');
               // $this->db->join('attribute_type_mas at','at.attribute_type_id=a.attribute_type_id','inner');
     
                               if(isset($id) && $id>0){
				$this->db->where('o.order_id', $id); 
                          }
                             if(isset($order_num) && $order_num>0){
				$this->db->where('o.order_number', $order_num); 
                          }
                          $this->db->group_by(["o.order_id"]);
                                
                         $query = $this->db->get();
          
				
                return $query->result();
        }
         public function get_orderAttributes($id=0)
        {
            $this->db->select("a.name,at.attribute_type,opa.product_id");
               $this->db->from("orders o");
              $this->db->join('order_product_attributes opa','opa.order_id=o.order_id','inner');//
             $this->db->join('attributes a','a.attribute_id=opa.attribute_id','inner');
               $this->db->join('attribute_type_mas at','at.attribute_type_id=a.attribute_type_id','inner');
     
                               if(isset($id) && $id>0){
				$this->db->where('o.order_id', $id); 
                          }
                         //$this->db->group_by(["o.order_id"]);
                           $this->db->order_by("at.attribute_type","DESC");
                         
                                
                         $query = $this->db->get();
          
				
                return $query->result();
        }
         public function getOrderTax($id = 0) {
             if (isset($id) && $id > 0) {
        $this->db->select("SUM(od.tax+od.shipping_gst+od.handling_gst) as tax");
        $this->db->from("orders o");
        $this->db->join('order_detail od', 'o.order_id=od.order_id', 'inner'); //
        $this->db->where('o.order_number', $id);
        $query = $this->db->get();

           
        return $query->result();
         }
    }
    public function updateStatus($updateStatus,$id)
        {
		  $this->db->set('status',$updateStatus);
		  $this->db->where("order_id",$id);
		  $this->db->update("orders");
		}

}