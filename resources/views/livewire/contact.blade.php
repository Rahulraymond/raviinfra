<section class="contact-layout2 pt-0 mt--120" id="contact">
    <div class="container">
        <div class="row contact-panel">
            <div class="col-sm-12 col-md-12 col-lg-8">
                <form class="contact-panel__form" wire:submit.prevent="saveContact">
                    <div class="row">
                        <div class="col-sm-12">
                            <h4 class="contact-panel__title">Connect to PD & RM</h4>
                            <p class="contact-panel__desc mb-40">
                                Complete control over planning and executions allows us to ensure our growth
                                partners receive the best quality services. Connect to Project Director &
                                Regional Manager for your queries and
                                suggestions.
                            </p>
                        </div>
                        <div class="col-md-12">
                            @if (session()->has('message'))
                                <div class="alert alert-success">
                                    {{ session('message') }}
                                </div>
                            @endif
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-6">
                            <div class="form-group">
                                <input type="text" wire:model="name" class="form-control" placeholder="Name*"
                                     />
                                @error('name')
                                    <span class="error text-danger"><small>{{ $message }}</small></span>
                                @enderror

                            </div>
                        </div>
                        <!-- /.col-lg-6 -->
                        <div class="col-sm-6 col-md-6 col-lg-6">
                            <div class="form-group">
                                <input type="email" class="form-control" wire:model="email" placeholder="Email*"
                                     />
                                @error('email')
                                    <span class="error text-danger"><small>{{ $message }}</small></span>
                                @enderror
                            </div>
                        </div>
                        <!-- /.col-lg-6 -->
                        <div class="col-sm-6 col-md-6 col-lg-6">
                            <div class="form-group">
                                <input type="text" class="form-control" wire:model="phone" placeholder="Phone*"
                                     />
                                @error('phone')
                                    <span class="error text-danger"><small>{{ $message }}</small></span>
                                @enderror
                            </div>
                        </div>
                        <!-- /.col-lg-6 -->
                        <div class="col-sm-6 col-md-6 col-lg-6">
                            <div class="form-group">
                                <select class="form-control" wire:model="query">
                                    <option value="0">Select a query*</option>
                                    <option value="Query 1">Query 1</option>
                                    <option value="Query 2">Query 2</option>
                                </select>
                                @error('query')
                                    <span class="error text-danger"><small>{{ $message }}</small></span>
                                @enderror
                            </div>
                        </div>
                        <!-- /.col-lg-6 -->
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                <textarea class="form-control" wire:model="details" placeholder="Additional Details*" ></textarea>
                                @error('detials')
                                    <span class="error text-danger"><small>{{ $message }}</small></span>
                                @enderror
                            </div>
                        </div>
                        <!-- /.col-lg-12 -->
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <button type="submit" class="btn btn__secondary btn__block">Submit</button>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                </form>
            </div>
            <!-- /.col-lg-8 -->
            <div class="col-sm-12 col-md-12 col-lg-4">
                <div class="contact-panel__info">
                    <h4 class="contact-panel__info__title">Contact Info</h4>
                    <div class="contact-panel__block">
                        <h5 class="contact-panel__block__title">Contact</h5>
                        <ul class="contact-panel__block__list list-unstyled">
                            <li>Mr. Lallan Awasthi (Project Manager)</li>
                            <li><a href="mailto:awasthi@raviinfra.com">awasthi@raviinfra.com</a></li>
                            <li><a href="tel:9111017307">+91 91110 17307</a></li>
                        </ul>
                    </div>
                    <!-- /.contact-panel__info__block -->
                    <div class="contact-panel__block">
                        <h5 class="contact-panel__block__title">Divisional Manager</h5>
                        <ul class="contact-panel__block__list list-unstyled">
                            <li>Mr. R.K. Jain, Divisional Manager, MPRDC, Indore Division</li>
                            <li><a href="mailto:dm-indore@mp.gov.in">dm-indore@mp.gov.in</a></li>
                            <li><a href="mailto:dmmprdcind2@gmail.com">dmmprdcind2@gmail.com</a></li>
                            <li><a href="tel:9425019645">+91 94250 19645</a></li>
                        </ul>
                    </div>
                    <!-- /.contact-panel__info__block -->
                    <h4 class="contact-panel__info__title">Site Info</h4>

                    <div class="contact-panel__block">
                        <h5 class="contact-panel__block__title">Location:-</h5>
                        <ul class="contact-panel__block__list list-unstyled">
                            <li>Kshipra, Indore, Madhya Pradesh</li>
                        </ul>
                    </div>
                    <!-- /.contact-panel__info__block -->
                    <div class="contact-panel__block">
                        <h5 class="contact-panel__block__title">Contact:-</h5>
                        <ul class="contact-panel__block__list list-unstyled">
                            <li><a href="tel:+919111017307">+91 91110 17307</a></li>
                        </ul>
                    </div>
                    <!-- /.contact-panel__info__block -->
                    <div class="contact-panel__block">
                        <h5 class="contact-panel__block__title">Email:-</h5>
                        <ul class="contact-panel__block__list list-unstyled">

                            <li><a href="mailto:kshpl@raviinfra.com">kshpl@raviinfra.com</a></li>
                            <li><a href="mailto:info@raviinfra.com">info@raviinfra.com</a></li>
                        </ul>
                    </div>
                    <!-- /.contact-panel__info__block -->
                </div>
                <!-- /.contact-panel__info -->
            </div>
            <!-- /.col-lg-4 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
