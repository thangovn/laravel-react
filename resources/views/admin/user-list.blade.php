@include('components.info-user')
<section class="user-list-table bg-white">

    <div class="data-table">
        <span class="text-user">User List</span>
        <div class="d-flex justify-content-end bd-highlight">
            <a href="/admin/add-new-user" type="button" class="btn pm-btn-gradient"><span
                    class="d-flex align-items-center">Add
                    New <span class="material-symbols-outlined">
                        add
                    </span>bootstrap 5 
                </span>
            </a>
        </div>
        <div>
            <img class="py-3" src="{{ asset('images/trash.png') }}" alt="">
        </div>
        <table class="table align-middle mb-3 bg-white">
            <thead class="bg-light">
                <tr>
                    <th scope="col"><input type="checkbox" name="check_all" id=""></th>
                    <th scope="col">#</th>
                    <th scope="col">ID</th>
                    <th scope="col">Full Name</th>
                    <th scope="col">Nick Name</th>
                    <th scope="col">Role</th>
                    <th scope="col">Created Date</th>
                    <th scope="col">Created by</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody class="data-content">
                <tr>
                    <td scope="col"><input type="checkbox" name="check-detail" id=""></td>
                    <th scope="row">1</th>
                    <td>524864</td>
                    <td>Nguyen Thi Hai Anh</td>
                    <td>Shopping - Sale</td>
                    <td>Super Admin</td>
                    <td style="color: #1975FF">Feb 24, 2022 1:35 PM</td>
                    <td> <img src="https://mdbootstrap.com/img/new/avatars/8.jpg" alt=""
                            style="width: 45px; height: 45px" class="rounded-circle" /></td>
                    <td class="active-status">Active</td>
                </tr>
                <tr>
                    <td scope="col"><input type="checkbox" name="check-detail" id=""></td>
                    <th scope="row">2</th>
                    <td>524864</td>
                    <td>Nguyen Thi Hai Anh</td>
                    <td>Shopping - Sale</td>
                    <td>Super Admin</td>
                    <td style="color: #1975FF">Feb 24, 2022 1:35 PM</td>
                    <td> <img src="https://mdbootstrap.com/img/new/avatars/8.jpg" alt=""
                            style="width: 45px; height: 45px" class="rounded-circle" /></td>
                    <td class="deactive-status">Deactive</td>
                </tr>
                <tr>
                    <td scope="col"><input type="checkbox" name="check-detail" id=""></td>
                    <th scope="row">3</th>
                    <td>524864</td>
                    <td>Nguyen Thi Hai Anh</td>
                    <td>Shopping - Sale</td>
                    <td>Super Admin</td>
                    <td style="color: #1975FF">Feb 24, 2022 1:35 PM</td>
                    <td> <img src="https://mdbootstrap.com/img/new/avatars/8.jpg" alt=""
                            style="width: 45px; height: 45px" class="rounded-circle" /></td>
                    <td class="active-status">Active</td>
                </tr>

                <tr>
                    <td colspan="9" class="px-5" style="line-height: 20px;">
                        <div class="datatable-pagination d-flex justify-content-end pt-2">
                            <div class="datatable-select-wrapper">
                                <p class="datatable-select-text">Rows per page:</p>
                            </div>
                            <div class="datatable-pagination-nav px-2">
                                1 - 10 of 14
                            </div>
                            <div class="datatable-pagination-buttons">
                                <a href="">
                                    <img class="px-2" src="{{ asset('images/Line.png') }}" alt=""
                                        style="transform: rotateY(150deg);">
                                </a>
                                <a href="">
                                    <img class="px-2" src="{{ asset('images/Line.png') }}" alt="">
                                </a>

                            </div>
                        </div>

                    </td>

                </tr>
            </tbody>
        </table>
    </div>



</section>
