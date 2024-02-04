@extends('layouts.app')
@section('title')
    {{ 'View ticket' }}
@endsection
@section('content')
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <!-- User Sidebar -->
            <div class="col-xl-4 col-lg-5 col-md-5 order-1 order-md-0">
                <!-- User Card -->
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="info-container">
                            <ul class="list-unstyled">
                                <li class="mb-3">
                                    <span class="fw-medium me-2">Username:</span>
                                    <span>violet.dev</span>
                                </li>
                                <li class="mb-3">
                                    <span class="fw-medium me-2">Email:</span>
                                    <span>vafgot@vultukir.org</span>
                                </li>
                                <li class="mb-3">
                                    <span class="fw-medium me-2">Status:</span>
                                    <span class="badge bg-label-success">Active</span>
                                </li>
                                <li class="mb-3">
                                    <span class="fw-medium me-2">Role:</span>
                                    <span>Author</span>
                                </li>
                                <li class="mb-3">
                                    <span class="fw-medium me-2">Tax id:</span>
                                    <span>Tax-8965</span>
                                </li>
                                <li class="mb-3">
                                    <span class="fw-medium me-2">Contact:</span>
                                    <span>(123) 456-7890</span>
                                </li>
                                <li class="mb-3">
                                    <span class="fw-medium me-2">Languages:</span>
                                    <span>French</span>
                                </li>
                                <li class="mb-3">
                                    <span class="fw-medium me-2">Country:</span>
                                    <span>England</span>
                                </li>
                            </ul>
                            <h5 class="pb-2 border-bottom mb-4"></h5>
                            <ul class="list-unstyled">
                                <li class="mb-3">
                                    <span class="fw-medium me-2">Attachments</span>
                                </li>
                            </ul>
                            <ul class="list-unstyled">
                                <li class="mb-3">
                                    <span class="fw-medium me-2">Attachment1</span>
                                </li>
                                <li class="mb-3">
                                    <span class="fw-medium me-2">Attachment2</span>
                                </li>
                            </ul>
                            <div class="d-flex justify-content-center pt-3">
                                <a href="javascript:;" class="btn btn-label-success suspend-user me-2" type="button"
                                    class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ansTicket">
                                    Answer
                                </a>
                                <a href="javascript:;" class="btn btn-label-danger suspend-user" data-bs-toggle="modal"
                                    data-bs-target="#closeTicket">
                                    Close
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /User Card -->
            </div>
            <!--/ User Sidebar -->

            <!-- User Content -->
            <div class="col-xl-8 col-lg-7 col-md-7 order-0 order-md-1">

                <!-- Project table -->
                <div class="card mb-4">
                    <h5 class="card-header">Details</h5>
                    <div class="table-responsive mb-3">
                        <p class="p-3">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique ullam natus necessitatibus
                            distinctio? Ipsam voluptas totam sunt. Quos modi atque similique magnam vero architecto
                            recusandae aperiam, reiciendis, quae ex temporibus!
                        </p>
                    </div>
                </div>
                <!-- /Project table -->
            </div>
            <!--/ User Content -->
        </div>

        <!-- Edit User Modal -->
        <div class="modal fade" id="ansTicket" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-simple modal-edit-user">
                <div class="modal-content p-3 p-md-5">
                    <div class="modal-body">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="text-center mb-4">
                            <h3>Write Answer</h3>
                        </div>
                        <form id="editUserForm" class="row g-3" onsubmit="return false">
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalEditUserFirstName">First Name</label>
                                <input type="text" id="modalEditUserFirstName" name="modalEditUserFirstName"
                                    class="form-control" placeholder="John" />
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalEditUserLastName">Last Name</label>
                                <input type="text" id="modalEditUserLastName" name="modalEditUserLastName"
                                    class="form-control" placeholder="Doe" />
                            </div>
                            <div class="col-12 col-md-12">
                                <label class="form-label" for="modalEditUserEmail">Answer</label>
                                <textarea class="form-control" aria-label="With textarea" data-gramm="false" wt-ignore-input="true"
                                    data-quillbot-element="BRMw-EL30SE9sNAVLeCFM"></textarea>
                            </div>
                            <div class="col-12 text-center">
                                <button type="submit" class="btn btn-primary me-sm-3 me-1">
                                    Submit
                                </button>
                                <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal"
                                    aria-label="Close">
                                    Cancel
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Edit User Modal -->

        <!-- Delete Item Modal -->
        <div class="modal fade" id="closeTicket" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-simple modal-enable-otp modal-dialog-centered">
                <div class="modal-content p-3 p-md-5">
                    <div class="modal-body">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="text-center mb-4">
                            <h3 class="mb-5">Close this ticket</h3>
                        </div>
                        <form id="deleteItemForm" class="row g-3" onsubmit="return false">
                            <div class="col-12 text-center">
                                <button type="submit" class="btn btn-primary me-sm-3 me-1">
                                    Yes
                                </button>
                                <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal"
                                    aria-label="Close">
                                    Cancel
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Delete Item Modal -->
    </div>
    <!-- / Content -->
@endsection
