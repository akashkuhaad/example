<div class="main-container" id="container">

            <div class="overlay"></div>
    <div class="search-overlay"></div>

    <div id="content" class="main-content">
        <div class="layout-px-spacing">

            <div class="page-header">
            <nav class="breadcrumb-one" aria-label="breadcrumb">
                <div class="title">
                    <h3>Invoice</h3>
                </div>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Apps</a></li>
                    <li class="breadcrumb-item active"  aria-current="page"><a href="javascript:void(0);">Invoice</a></li>
                </ol>
            </nav>

        </div>

        <div class="row invoice layout-top-spacing">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="app-hamburger-container">
                    <div class="hamburger"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu chat-menu d-xl-none"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg></div>
                </div>
<div class="doc-container containing-whole">
                    
                    
<div class="invoice-container containing-invoice">
    <div class="invoice-inbox invoice-form-secion-container">
    <label><h3>Create Invoice</h3></label>
    <div class="invoice-header-section">
        <h4 class="inv-number"></h4>
    <div class="invoice-action">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-printer action-print" data-toggle="tooltip" data-placement="top" data-original-title="Reply"><polyline points="6 9 6 2 18 2 18 9"></polyline><path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path><rect x="6" y="14" width="12" height="8"></rect></svg>
    </div>
    </div>
                       
                       
    <form>
    <div class="form-row mb-4">
    <div class="form-group col-md-2">
            <input type="text" class="form-control" id="inputZip" placeholder="Invoice No.">
        </div>
        <div class="form-group col-md-6">
            <input type="text" class="form-control" id="name" placeholder="Name">
        </div>
        <div class="form-group col-md-3">
            <input type="text" class="form-control" id="title" placeholder="Invoice Title">
        </div>
    </div>
    <div class="form-row mb-4">
        <div class="form-group col-md-5">
            <input type="text" class="form-control" id="inputAddress" placeholder="Address">
        </div>
        <div class="form-group col-md-3">
            <input type="text" class="form-control" id="issue" placeholder="Invoice Date">
        </div>
        <div class="form-group col-md-3">
            <input type="text" class="form-control" id="duedate" placeholder="Due Date">
        </div>
    </div>
    <div class="container pt-4"> 
        <div class="table-responsive"> 
            <table class="table table-bordered"> 
                <thead> 
                 <tr> 
                    <th class="text-center">#</th> 
                    <th class="text-center">Product</th>
                    <th class="text-center">Qty</th> 
                    <th class="text-center">Price</th>
                    <th class="text-center">Total</th> 
                    <th class="text-center"></th> 
                </tr> 
                </thead> 
                <tbody id="tbody"> 
        
                </tbody> 
            </table> 
    </div> 
    </div> 
    <div class="bottom-buttons">
        <button class="btn btn-md btn-primary adder-btn" id="addBtn" type="button"> 
            Add
        </button> 
        <button type="submit" class="btn btn-primary mt-3 creator-btn">Create</button>
    </div>    
    
    
  


    
   
  
  
</form>             
                            
</div>
                  

                        <div class="inv--thankYou">
                            <div class="row">
                                <div class="col-sm-12 col-12">
                                    <p class="">Thank you for doing Business with us.</p>
                                </div>
                            </div>
                        </div>

                    </div>


                    
                    
                </div>
                <div class="sales-register-invoice">
                    <div class="custpmized-row">
                        Select Customer (Optional)<br>
                        <form action="/action_page.php">
                            <div class="cash-dropdown">
                                <select class="cash-dropdown-selector">
                                    <option value="Rupees"></option>
                                    <option value="Rupees">Indian</option>
                                    <option value="Rupees">Arab</option>
                                    <option value="Rupees">Dubai</option>
                                    <option value="Rupees">Vivek</option>
                                </select>
                            </div>
                            <div class="or-text margin-class">
                                OR
                            </div>
                            <div class="new-cx-button margin-class">
                                <a class="button-anchor-link" href="#"><button class="new-cx-btn">New Customer</button></a>
                            </div>
                            <div class="Date-selection margin-class">
                                
                                    <label for="birthday">Current date </label>
                                    <input class="input-style-margin" type="date" id="" name="">                            
                                
                            </div>
                            <div class="subtotal margin-class">
                                
                                    <label for="">Sub total</label>
                                    <input class="input-style-margin" type="mynumber" id="" name="" min="" max="">
                                
                            </div>
                            <div class="searcher margin-class">
                                <label for="">Tax</label>
                                <input class="input-style-margin" type="mynumber" id="" name="search" place-holder="search...">
                            </div>
                            <div class="discounter margin-class">
                                <label for="">Discount</label>
                                <input class="input-style-margin" type="mynumber" id="" name="discount" place-holder="">
                            </div>
                            <div class="total margin-class">
                                <label for="">Total</label>
                                <input class="input-style-margin" type="mynumber" id="" name="total" place-holder="">
                            </div>
                            <div class="due-amount margin-class">
                                <label for="">Amount Due</label>
                                <input class="input-style-margin" type="mynumber" id="" name="amount-due" place-holder="">
                            </div>
                            <div class="return-amount margin-class">
                                <label for="">Amount Return</label>
                                <input class="input-style-margin" type="mynumber" id="" name="amount-return" place-holder="">
                            </div>
                             
                            <div class="cash-dropdown1">
                            Add payement
                                <select class="cash-dropdown-selector1">
                                    <option value="Rupees"></option>
                                    <option value="Rupees">Indian</option>
                                    <option value="Rupees">Arab</option>
                                    <option value="Rupees">Dubai</option>
                                    <option value="Rupees">Vivek</option>
                                </select>
                            </div>
                            <div class="payment-adder">
                              <input class="input-style-border" type="mynumber" id="" name="add-payment" place-holder="">   
                              <a href="#" class="adding-payment"><button class="add-pay-button">Add Payment</button></a> 
                            </div>
                            <div class="receive-payment">
                                <label for="">Receive Payment</label>
                                <input class="input-style-margin" type="mynumber" id="" name="receive-payment" place-holder="">
                            </div>
                            <div class="commenter">
                                <label for="">Comments : </label> <br>
                                <textarea id="w3review" name="w3review" rows="2" cols="44">
                                </textarea>
                            </div>
                            <div class="commenter">
                                <input type="checkbox" id="" name="" value="">
                                <label for="">Show comments on receipt</label>
                            </div>                           
                            
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
