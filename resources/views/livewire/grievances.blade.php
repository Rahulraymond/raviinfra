<div class="modal fade" id="formplay" wire:ignore.self>
    <div class="modal-dialog">
        <div class="modal-content">
            <form class="pb-2" wire:submit.prevent="saveGrievances" enctype="multipart/form-data">
                <div class="card-header">
                    <b>Grievances</b>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <label for="name">Name</label> <span class="text-danger">*</span>
                            <input type="text" id="name" wire:model="name" class="form-control">
                            @error('name') <span class="error text-danger"><small>{{ $message }}</small></span> @enderror
                            
                        </div>
                        <div class="col-md-12">
                            <label for="phone">Contact Number</label> <span class="text-danger">*</span>
                            <input type="text" id="phone" wire:model="phone" class="form-control">
                            @error('phone') <span class="error text-danger"><small>{{ $message }}</small></span> @enderror
                        </div>
                        <div class="col-md-12">
                            <label for="email">Email Address</label> <span class="text-danger">*</span>
                            <input type="email" id="email" wire:model="email" class="form-control">
                            @error('email') <span class="error text-danger"><small>{{ $message }}</small></span> @enderror
                        </div>
                        <div class="col-md-12">
                            <label for="location">Location</label> <span class="text-danger">*</span>
                            <input type="text" id="location" wire:model="location" class="form-control">
                            @error('location') <span class="error text-danger"><small>{{ $message }}</small></span> @enderror
                        </div>
                        <div class="col-md-12">
                            <label for="for">For</label> <span class="text-danger">*</span>
                            <select name="for" id="for" wire:model="for" class="form-control"> <span class="text-danger">*</span>
                                <option value="">--Select Reason--</option>
                                <option value="Road">Road</option>
                                <option value="Security">Security</option>
                                <option value="Toll">Toll</option>
                                <option value="Others">Others</option>
                            </select>
                            @error('for') <span class="error text-danger"><small>{{ $message }}</small></span> @enderror
                        </div>
                        <div class="col-md-12">
                            <label for="document">Upload Document</label> <span class="text-danger">*</span>
                            <input type="file" id="document" wire:model="document" class="form-control">
                            @error('document') <span class="error text-danger"><small>{{ $message }}</small></span> @enderror
                        </div>
                    </div>
                </div>
                <div class="card-footer pb-2">
                    <button class="btn btn__secondary header__btn float-right">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
