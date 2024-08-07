    {{-- Single delete modal --}}
    <div class="modal modal-danger fade" tabindex="-1" id="selectUser" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-info">
                    {{-- <button type="button"
                        class="close"
                        data-dismiss="modal"
                        aria-label="{{ __('voyager::generic.close') }}">
                    <span aria-hidden="true">&times;</span>
                </button> --}}
                    <h4 class="modal-title">
                        <i class="voyager-info"></i>
                        {{ __('User Result') }}
                        {{-- {{ __('voyager::generic.delete_question') }} --}}
                        {{-- {{ strtolower($dataType->getTranslatedAttribute('display_name_singular')) }} --}}
                        </h4>
                </div>
                <div class="modal-body">

                    {{-- @dump($result->get()[0]) --}}

                    <select name="" id="" class="form-control selecting-user">
                        <option value="">Select User</option>
                        @forelse ($result as $re)
                            <option value="{{$re->user->id}}">{{ $re->user->name }}</option>
                        @empty

                        @endforelse
                    </select>

                    <p class="text-danger empty-error">Please select a user.</p>

                    {{-- @dump($result->user->name) --}}

                </div>
                <div class="modal-footer">
                    {{-- <input type="submit" class="btn btn-danger pull-right getUser"
                        value=""> --}}
                        <button class="btn btn-danger pull-right getUser">Submit</button>
                   {{--  <form action="#" id="delete_form" method="POST">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <input type="submit" class="btn btn-danger pull-right delete-confirm"
                        value="{{ __('voyager::generic.delete_confirm') }}">
                    </form> --}}
                    {{-- <button type="button" class="btn btn-default pull-right"
                    data-dismiss="modal">{{ __('voyager::generic.cancel') }}</button> --}}
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->


    <style>
        .voyager .modal.modal-danger .modal-header{
            background-color: #007bff;
        }
        .empty-error{
            display: none;
        }
    </style>


<script>

</script>
