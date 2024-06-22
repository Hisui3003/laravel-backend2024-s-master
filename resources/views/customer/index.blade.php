@extends('layouts.master')
@section('content')

<div class="">
    <div id="items" class="my-10 h-full w-full origin-center container flex flex-col ">

        <div class="flex bg-gray-200 items-center rounded-t-2xl">
            {{-- button to add --}}
            <div class="py-1 px-2">
                <button type="button" class="btn btn-lg bg-red-500 text-white my-3 px-5 hover:scale-105 transition-transform"
                    data-toggle="modal" data-target="#customerModal">
                    ADD
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </button>
            </div>

            {{-- how do i align this to the very end? --}}
            <div class="ml-auto py-1 px-2">
                <input type="text" id='itemSearch' placeholder="--search--"
                    class="w-80 p-1 h-12 border border-gray-300 rounded">
            </div>
        </div>

        {{-- table --}}
        <div class="max-h-[700px] overflow-y-auto">
            <table id="ctable" class="min-w-full divide-y divide-gray-200 table-auto">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Customer ID</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Image</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Last Name</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">First Name</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Address Line</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Edit</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Delete</th>
                    </tr>
                </thead>
                <tbody id="cbody" class="bg-white divide-y divide-gray-200"></tbody>
            </table>
        </div>

        <div class="flex bg-gray-200 items-center rounded-b-2xl">
            &nbsp <br> &nbsp
        </div>
    </div>


    {{-- pop up when button "add" is clicked --}}
    <div class="modal fade my-20" id="customerModal" role="dialog" style="display:none">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add New Customer</h4>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>

                {{-- fill-in area --}}
                <div class="modal-body grid grid-col-span-2 gap-3">
                    <form id="cform" method="#" action="#" enctype="multipart/form-data">

                        {{-- <div class="form-group">
                            <label for="customerId" class="control-label">customer id</label>
                            <input type="text" class="form-control" id="customerId" name="customer_id" readonly>
                        </div> --}}

                        <div class="flex col-span-2 gap-4">
                            <div class="w-1/2">
                                <div class="form-group">
                                    <label for="lname" class="control-label">Last Name</label>
                                    <input type="text" class="form-control" id="lname" name="lname">
                                </div>
                            </div>
                            <div class="w-1/2">
                                <div class="form-group">
                                    <label for="fname" class="control-label">First Name</label>
                                    <input type="text" class="form-control" id="fname" name="fname">
                                </div>
                            </div>
                        </div>

                        <div class="flex col-span-2 gap-4">
                            <div class="w-1/2">
                                <div class="form-group">
                                    <label for="address" class="control-label">Address</label>
                                    <input type="text" class="form-control " id="address" name="addressline">
                                </div>
                            </div>
                            <div class="w-1/2">
                                <div class="form-group">
                                    <label for="zipcode" class="control-label">Zipcode</label>
                                    <input type="text" class="form-control " id="zipcode" name="zipcode">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="phone" class="control-label">Phone</label>
                            <input type="text" class="form-control " id="phone" name="phone">
                        </div>
                        <div class="form-group">
                            <label for="email" class="control-label">Email</label>
                            <input type="text" class="form-control " id="email" name="email">
                        </div>
                        <div class="form-group">
                            <label for="pass" class="control-label">Password</label>
                            <input type="password" class="form-control " id="pass" name="password">
                        </div>
                        <div class="form-group">
                            <label for="image" class="control-label">Image</label>
                            <input type="file" class="form-control" id="image_upload" name="uploads" />
                        </div>
                    </form>
                </div>
                <div class="modal-footer" id="footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button id="customerSubmit" type="submit" class="btn btn-primary">Save</button>
                    <button id="customerUpdate" type="submit" class="btn btn-primary">update</button>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection
