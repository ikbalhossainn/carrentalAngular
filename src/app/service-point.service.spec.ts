import { TestBed } from '@angular/core/testing';

import { ServicePointService } from './service-point.service';

describe('ServicePointService', () => {
  let service: ServicePointService;

  beforeEach(() => {
    TestBed.configureTestingModule({});
    service = TestBed.inject(ServicePointService);
  });

  it('should be created', () => {
    expect(service).toBeTruthy();
  });
});
