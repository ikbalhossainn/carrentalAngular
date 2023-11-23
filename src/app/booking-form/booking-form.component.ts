import { HttpClient } from '@angular/common/http';
import { Component } from '@angular/core';


@Component({
  selector: 'app-booking-form',
  templateUrl: './booking-form.component.html',
  styleUrls: ['./booking-form.component.css']
})
export class BookingFormComponent {
  constructor(private http:HttpClient){
  }
onSubmit(data:any){
  this.http.post('http://localhost/wdpf55_angular/carrental/api/booking.php',data).
  subscribe(result=>{
    console.log(result);
    if(result){
      alert("Inserted Successfully")
    }
  })


}

}
