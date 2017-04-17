@extends('layout.master')

@section('title', 'Home | SPOC Portals')

@section('slider')
    <div class="slider-imgs">
        <img src="{{$SITE_URL}}/images/main-home-slider041.png" alt="" usemap="#map" />
    </div>
@stop


@section('content')
    <div class="home_content" id="home_page_content">
        <div class="sidebar-menu">
            <ul>
                <li class="menu-title">New Orders</li>
                <li><a class="menu-links" href="{{$SITE_URL}}/order/devices.php">Devices</a></li>
                <li><a class="menu-links" href="{{$SITE_URL}}/order/international-services.php">International Services</a></li>
                <li><a class="menu-links" href="{{$SITE_URL}}/order/account-details.php">Account Details</a></li>
                <li><a class="menu-links" href="{{$SITE_URL}}/order/duplicate-bill.php">Duplicate Bill</a></li>
                <li><a class="menu-links" href="{{$SITE_URL}}/order/complaints.php">Complaints</a></li>
            </ul>
        </div>

        <div class="main-right-content">
            <div id="error_msg"></div><div id="succes_msg"></div>
            <h3 id="h3">All Orders</h3>
            <div class="order-listing">
                <div class="total-order-results">
                    <ul>
                        <li><span onclick="filterData('status','All');">All: 100</span></li>
                        <li><span onclick="filterData('status','Submitted');">Submitted: 20</span></li>
                        <li><span onclick="filterData('status','In Progress');">In Progress: 10</span></li>
                        <li><span onclick="filterData('status','Un-Submitted');">Un-Submitted: 20</span></li>
                        <li><span onclick="filterData('status','Closed');">Closed: 50</span></li>
                    </ul>
                </div>
                <div class="date-input">
                    <span id="date_range">
                		<input type="text" id="from" class="datefield" placeholder="From" value="">&nbsp;-&nbsp;
                		<input type="text" id="to" class="datefield" placeholder="To" value="">
                	</span>
                    <div class="clear"></div>
                </div>
                <div class="grid">
                    <table class="show_rcds" style="" cellspacing="0" cellpadding="0" border="0">
                        <thead>
                        <tr class="head_row">
                            <th field="itemid" width="10%" align="center">ID</th>
                            <th field="productid" width="25%" align="center">
                                <select id="type" onchange="filterData(this.id, this.value)">
                                    <option value="">Select Type</option>
                                    <option value="All">All</option>
                                    <option value="Devices">Devices</option>
                                    <option value="International Services">International Services</option>
                                    <option value="Account Management">Account Management</option>
                                    <option value="Bill Management">Bill Management</option>
                                </select>
                            </th>
                            <th field="listprice" width="20%" align="center" sortable="true">
                                <p>Created On&nbsp;<input onchange="filterData(this.id, this.value)" style="width: 100px;" type="hidden" id="createdon" /></p>
                            </th>
                            <th field="unitcost" width="20%" align="center" sortable="true">
                                <p>Updated On&nbsp;<input onchange="filterData(this.id, this.value)" style="width: 100px;" type="hidden" id="updatedon" /></p>
                            </th>
                            <th field="status" width="25%" align="center">
                                <select id="status" onchange="filterData(this.id, this.value)">
                                    <option value="">Select Status</option>
                                    <option value="All">All</option><option value="Un-Submitted">Un-Submitted</option>
                                    <option value="Submitted">Submitted</option>
                                    <option value="In Progress">In Progress</option>
                                    <option value="Closed">Closed</option>
                                </select>
                            </th>
                        </tr>
                        </thead>
                        <tbody class='txtHint'>
                        </tbody>
                        <tr>
                            <td colspan="5">
                                <div id="paging">
                                    <div id="paging-left">
                                        <input type="button" value="Go to ID" class="go_button2" id="go_toid_btn">&nbsp;
                                        <input type="text" name="id" id="go_toid" size="5" />
                                    </div>
                                    <div id="paging-right">
                                    <span id="show-rows">Show Rows
                                        <select id="rows" onchange="filterData('showrows', this.value);">
                                            <option value="10">10</option>
                                            <option value="20">20</option>
                                            <option value="30">30</option>
                                            <option value="40">40</option>
                                            <option value="50">50</option>
                                        </select>
                                    </span>
                                        <div class="pagination"></div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
           </div>
        </div>
        <div class="clear"></div>
    </div>
@stop
