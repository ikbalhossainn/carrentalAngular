import { TestBed } from '@angular/core/testing';

import { CarbookingServiceService } from './carbooking-service.service';

describe('CarbookingServiceService', () => {
  let service: CarbookingServiceService;

  beforeEach(() => {
    TestBed.configureTestingModule({});
    service = TestBed.inject(CarbookingServiceService);
  });

  it('should be created', () => {
    expect(service).toBeTruthy();
  });
});
