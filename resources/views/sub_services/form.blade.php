<div class="preview-block">
    <span class="preview-title-lg overline-title">Sub-Service Details</span>
   
    <div class="row gy-4">
        <div class="col-lg-4 col-sm-6">
            <div class="form-group">
                <div class="form-control-wrap">
                    <select class="form-select js-select2" data-ui="xl" id="state_of_origin1"
                        name="service_id" data-search="on" required>
                        @foreach($services as $service)
                            <option value="{{ $service->id }}" @selected(old('service_id', $subservices->service_id ?? '')==$service->id)>{{ $service->first_name }}
                            </option>
                        @endforeach
                    </select>
                    <label class="form-label-outlined" for="outlined-select">Select Service:</label>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-sm-6">
            <div class="form-group">
                <div class="form-control-wrap">
                    <div class="form-icon form-icon-right">
                        <em class="icon ni ni-user"></em>
                    </div>
                    <input type="text" class="form-control form-control-xl form-control-outlined"
                        id="name" name="name" value="{{old('name', $subservices->name ?? '')}}">
                    <label class="form-label-outlined" for="name">Name of Sub-Service</label>
                </div>
            </div>
        </div>
    </div>

    <hr class="preview-hr">
    <div class="row g-4">
        <div class="col-2">
            <div class="form-group">
                <button type="submit" class="btn btn-lg btn-primary btn-block"><em
                        class="icon ni ni-save me-2"></em> SUBMIT</button>
            </div>
        </div>
    </div>
</div>
