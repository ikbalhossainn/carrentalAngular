import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { map } from 'rxjs/operators';
import { service } from './service';

@Injectable({
  providedIn: 'root'
})
export class ServicePointService {

  baseUrl = 'http://localhost/wdpf55_angular/carrental/api/'
  constructor(private http: HttpClient) { }
  
 
  getAll(){
    return this.http.get(`${this.baseUrl}/menu.php`).pipe(
      map((res:any) => {
        return res['data'];
      })
    )
  }
}
