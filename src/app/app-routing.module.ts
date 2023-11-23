import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { MainComponent } from './main/main.component';
import { AboutComponent } from './about/about.component';
import { ServiceComponent } from './service/service.component';
import { ContactComponent } from './contact/contact.component';
import { CarbookingComponent } from './carbooking/carbooking.component';
import { BookingFormComponent } from './booking-form/booking-form.component';

// import { ProductDetailsComponent } from './product-details/product-details.component';

const routes: Routes = [
  {path:'', component: MainComponent},
  {path:'about', component: AboutComponent},
  {path:'service', component: ServiceComponent},
  {path:'contact', component: ContactComponent},
  {path:'carbooking', component: CarbookingComponent},
  {path:'bookingform', component: BookingFormComponent}
  // {path: 'products', component: ProductDetailsComponent}
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
