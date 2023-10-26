@extends('backend.layouts.app')

@section('content')
<div class="card">
    <h6 class="card-header">Hosting Package</h6>
    <div class="card-datatable table-responsive">
        <table class="datatables-demo table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Inventory</th>
                    <th>Name</th>
                    <th>Title</th>
                    <th>SSD Storage</th>
                    <th>Bandwidth</th>
                    <th>Addon Domain</th>
                    <th>Sub Domain</th>
                    <th>FTP Account</th>
                    <th>Data Transfer</th>
                    <th>Database</th>
                    <th>Email Account</th>
                    <th>CPU Limit</th>
                    <th>RAM</th>
                    <th>hour Email Limit</th>
                    <th>cPanel</th>
                    <th>SSL Certificate</th>
                    <th>LiteSpeed Server</th>
                    <th>CloudLinux OS</th>
                    <th>Imunify360 Firewall</th>
                    <th>Softaclus Scripts</th>
                    <th>Instant Activation</th>
                    <th>Any Time Upgradation</th>
                    <th>Weekly Backup</th>
                    <th>99.9% Uptime Grantee</th>
                    <th>24/7 Phone Support</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($hosting_package as $hosting)
                <tr class="odd gradeX">
                    <td><a href="{{ route('hosting_package.inventory', $hosting->id) }}"><i class="fas fa-server"></i></a></td>
                    <td>{{ $hosting->name }}</td>
                    <td>{{ $hosting->title }}</td>
                    <td>{{ $hosting->storage }}</td>
                    <td class="center">{{ $hosting->bandwidth }}</td>
                    <td class="center">{{ $hosting->addon_domain }}</td>
                    <td class="center">{{ $hosting->sub_domain }}</td>
                    <td class="center">{{ $hosting->ftp_account }}</td>
                    <td class="center">{{ $hosting->transfer }}</td>
                    <td class="center">{{ $hosting->database }}</td>
                    <td class="center">{{ $hosting->email }}</td>
                    <td class="center">{{ $hosting->cpu_limit }}</td>
                    <td class="center">{{ $hosting->ram }}</td>
                    <td class="center">{{ $hosting->email_limit }}</td>
                    <td class="center">
                        @if ($hosting->cpanel == 1)
                            Yes
                        @else
                            no
                        @endif
                    </td>
                    <td class="center">
                        @if ($hosting->ssl == 1)
                            Yes
                        @else
                            no
                        @endif
                    </td>
                    <td class="center">
                        @if ($hosting->litespeed == 1)
                            Yes
                        @else
                            no
                        @endif
                    </td>
                    <td class="center">
                        @if ($hosting->cloudlinux == 1)
                            Yes
                        @else
                            no
                        @endif
                    </td>
                    <td class="center">
                        @if ($hosting->firewall == 1)
                            Yes
                        @else
                            no
                        @endif
                    </td>
                    <td class="center">
                        @if ($hosting->softaclus == 1)
                            Yes
                        @else
                            no
                        @endif
                    </td>
                    <td class="center">
                        @if ($hosting->instant == 1)
                            Yes
                        @else
                            no
                        @endif
                    </td>
                    <td class="center">
                        @if ($hosting->upgradation == 1)
                            Yes
                        @else
                            no
                        @endif
                    </td>
                    <td class="center">
                        @if ($hosting->backup == 1)
                            Yes
                        @else
                            no
                        @endif
                    </td>
                    <td class="center">
                        @if ($hosting->grantee == 1)
                            Yes
                        @else
                            no
                        @endif
                    </td>
                    <td class="center">
                        @if ($hosting->support == 1)
                            Yes
                        @else
                            no
                        @endif
                    </td>
                    <td><a class="btn btn-round btn-danger" href="{{ route('hosting.package.delete', $hosting->id) }}">Delete</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection