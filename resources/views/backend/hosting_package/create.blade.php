@extends('backend.layouts.app')

@section('content')
<!-- [ Layout content ] Start -->
<div class="layout-content">

    <!-- [ content ] Start -->
    <div class="container-fluid flex-grow-1 container-p-y">
        <h4 class="font-weight-bold py-3 mb-0">Hosting</h4>
        <div class="text-muted small mt-0 mb-4 d-block breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#"><i class="feather icon-home"></i></a></li>
                <li class="breadcrumb-item">Forms</li>
                <li class="breadcrumb-item active">Hosting</li>
            </ol>
        </div>

        <div class="card mb-4">
            <div class="card-body">
                <form id="validation-form" action="{{ route('hosting_package.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label class="form-label">Category</label>
                        <select name="category_id" id="" class="form-control">
                            @foreach ($categorys as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Title</label>
                        <input type="text" class="form-control" name="title" placeholder="Title">
                    </div>
                    <div class="form-group">
                        <label class="form-label">SSD Storage</label>
                        <input type="text" class="form-control" name="storage" placeholder="SSD Storage">
                        <div class="clearfix"></div>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Bandwidth</label>
                        <input type="number" class="form-control" name="bandwidth" placeholder="Bandwidth">
                        <div class="clearfix"></div>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Addon Domain</label>
                        <input type="text" class="form-control" name="addon_domain" placeholder="Addon Domain">
                        <div class="clearfix"></div>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Sub Domains</label>
                        <input type="text" class="form-control" name="sub_domain" placeholder="Sub Domains">
                        <div class="clearfix"></div>
                    </div>
                    <div class="form-group">
                        <label class="form-label">FTP Account</label>
                        <input type="text" class="form-control" name="ftp_account" placeholder="FTP Account">
                        <div class="clearfix"></div>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Data Transfer Monthly</label>
                        <input type="number" class="form-control" name="transfer" placeholder="Data Transfer Monthly">
                        <div class="clearfix"></div>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Database</label>
                        <input type="text" class="form-control" name="database" placeholder="Database">
                        <div class="clearfix"></div>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Email Account</label>
                        <input type="text" class="form-control" name="email" placeholder="Email Account">
                        <div class="clearfix"></div>
                    </div>
                    <div class="form-group">
                        <label class="form-label">CPU Limit</label>
                        <input type="text" class="form-control" name="cpu_limit" placeholder="CPU Limit">
                        <div class="clearfix"></div>
                    </div>
                    <div class="form-group">
                        <label class="form-label">RAM</label>
                        <input type="text" class="form-control" name="ram" placeholder="RAM">
                        <div class="clearfix"></div>
                    </div>
                    <div class="form-group">
                        <label class="form-label">hour Email Limit</label>
                        <input type="text" class="form-control" name="email_limit" placeholder="Email Limit">
                        <div class="clearfix"></div>
                    </div>
                    
                    
                    <div class="form-group">
                        <label class="form-label">cPanel</label>
                        <div class="form-check">
                            <label class="form-check-label"><input class="form-check-input" value="1" type="radio" name="cpanel">Yes</label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label"><input class="form-check-input" value="0" type="radio" name="cpanel">No</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label">SSL Certificate</label>
                        <div class="form-check">
                            <label class="form-check-label"><input class="form-check-input" value="1" type="radio" name="ssl">Yes</label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label"><input class="form-check-input" value="0" type="radio" name="ssl">No</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label">LiteSpeed Server</label>
                        <div class="form-check">
                            <label class="form-check-label"><input class="form-check-input" value="1" type="radio" name="litespeed">Yes</label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label"><input class="form-check-input" value="0" type="radio" name="litespeed">No</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label">CloudLinux OS</label>
                        <div class="form-check">
                            <label class="form-check-label"><input class="form-check-input" value="1" type="radio" name="cloudlinux">Yes</label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label"><input class="form-check-input" value="0" type="radio" name="cloudlinux">No</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Imunify360 Firewall</label>
                        <div class="form-check">
                            <label class="form-check-label"><input class="form-check-input" value="1" type="radio" name="firewall">Yes</label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label"><input class="form-check-input" value="0" type="radio" name="firewall">No</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Softaclus Scripts</label>
                        <div class="form-check">
                            <label class="form-check-label"><input class="form-check-input" value="1" type="radio" name="softaclus">Yes</label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label"><input class="form-check-input" value="0" type="radio" name="softaclus">No</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Instant Activation</label>
                        <div class="form-check">
                            <label class="form-check-label"><input class="form-check-input" value="1" type="radio" name="instant">Yes</label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label"><input class="form-check-input" value="0" type="radio" name="instant">No</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Any Time Upgradation</label>
                        <div class="form-check">
                            <label class="form-check-label"><input class="form-check-input" value="1" type="radio" name="upgradation">Yes</label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label"><input class="form-check-input" value="0" type="radio" name="upgradation">No</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Weekly Backup</label>
                        <div class="form-check">
                            <label class="form-check-label"><input class="form-check-input" value="1" type="radio" name="backup">Yes</label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label"><input class="form-check-input" value="0" type="radio" name="backup">No</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label">99.9% Uptime Grantee</label>
                        <div class="form-check">
                            <label class="form-check-label"><input class="form-check-input" value="1" type="radio" name="grantee">Yes</label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label"><input class="form-check-input" value="0" type="radio" name="grantee">No</label>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label">24/7 Phone Support</label>
                        <div class="form-check">
                            <label class="form-check-label"><input class="form-check-input" value="1" type="radio" name="support">Yes</label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label"><input class="form-check-input" value="0" type="radio" name="support">No</label>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h6>Hosting Package Inventory</h6>
                        </div>
                            <div class="card-body" id="product_attr_box">
                                <div class="row" id="product_attr_1">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-label" for="month">Month</label>
                                            <input type="text" id="month" name="month[]" class="form-control" placeholder="month">
                                            
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-label" for="year">Year</label>
                                            <input type="text" id="year" name="year[]" class="form-control" placeholder="year">
                                            
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-label" for="price">Price</label>
                                            <input type="text" id="price" name="price[]" class="form-control" placeholder="price" aria-required="true" aria-invalid="false" required>
                                            
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-label">Link</label>
                                            <input type="text" class="form-control" name="link[]" placeholder="Link">
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Action</label>
                                            <div>
                                                <a class="btn btn-primary text-white" name="add" id="add" onclick="add()">+ Add</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>

    </div>
    <!-- [ content ] End -->
@endsection

<script>
    var loop_count = 1;
    function add() {
        loop_count++;

        var html = '<div class="row mt-4" id="product_attr_'+loop_count+'">';

        html+='<div class="col-md-4"><div class="form-group"><label class="form-label">Month</label><input type="text" id="month" name="month[]" class="form-control" placeholder="month" aria-required="true" aria-invalid="false"></div></div>';
        
        html+='<div class="col-md-4"><div class="form-group"><label class="form-label">Year</label><input type="text" id="year" name="year[]" class="form-control" placeholder="year" aria-required="true" aria-invalid="false"></div></div>';
        
        html+='<div class="col-md-4"><div class="form-group"><label class="form-label">Price</label><input type="text" id="price" name="price[]" class="form-control" placeholder="price" aria-required="true" aria-invalid="false" required></div></div>';
        
        html+='<div class="col-md-6"><div class="form-group"><label class="form-label">Link</label><input type="text" id="link" name="link[]" class="form-control" placeholder="link" aria-required="true" aria-invalid="false" required></div></div>';

        html+='<div class="col-md-4"><div class="form-group"><label class="form-label">Action</label><div><button class="btn btn-danger" name="remove" id="remove" onclick=remove_more("'+loop_count+'")> - Remove</button></div></div></div>';

        html+='</div>';

        jQuery('#product_attr_box').append(html);
    }

    function remove_more(loop_count) {
        jQuery('#product_attr_'+loop_count).remove();
    }
</script>