import { Component, OnInit } from '@angular/core';
import { CarbookingServiceService } from '../carbooking-service.service';
import { Product } from '../carbooking';
import { Router } from '@angular/router';



@Component({
  selector: 'app-carbooking',
  templateUrl: './carbooking.component.html',
  styleUrls: ['./carbooking.component.css']
})
export class CarbookingComponent implements OnInit {
  products: Product[]=[];
   error = '';
   success = '';
   product: Product = {
 
    id: 0,
    VehiclesTitle:'',
    FuelType:'',
    ModelYear:0,
    PricePerDay:0,
    SeatingCapacity: 0,
    Vimage1:''
   };
   constructor(private carbookingService:  CarbookingServiceService, private router: Router){
    
   }
   ngOnInit() {
     this.getProducts()
  
     
   }
   getProducts(): void {
    this.carbookingService.getAll().subscribe(
      (data:Product[])=> {
        console.log(data);
      this.products = data; 
      }
    )
   }
   redirectToBookingForm(data: any): void {
    // You can pass data to the booking form if needed
    this.router.navigate(['/booking-form', { vehicleData: JSON.stringify(data) }]);
  }
  }


  // @Component({
  //   selector: 'app-menu',
  //   templateUrl: './menu.component.html',
  //   styleUrls: ['./menu.component.css']
  // })
  // export class MenuComponent implements OnInit {
  //  products: Product[]=[];
  //  error = '';
  //  success = '';
  //  product: Product = {
  //   prod_id:0,
  //   prod_name:'',
  //   prod_img:'',
  //   prod_price:0,
  //   prod_desc:'',
  //   created_at:0
   
  //  };
  //  constructor(private productService: ProductPointService){
    
  //  }
  //  ngOnInit() {
  //    this.getProducts()
  
     
  //  }
  //  getProducts(): void {
  //   this.productService.getAll().subscribe(
  //     (data:Product[])=> {
  //       console.log(data);
  //     this.products = data; 
  //     }
  //   )
  //  }
  // }