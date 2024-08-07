
@extends('layouts.page')

@section('content')

<main class=" w-full min-h-auto flex item-center justify-center flex-col">
        <div class="form_container   px-8 md:w-2/3 h-full mx-auto">
            <div
                class="bg-slate-100 flex items-start  flex-col my-8  rounded min-h-auto pb-4 lg:pb-24">
                <h2 class="bg-blue-600 text-white text-2xl  rounded font-bold w-full px-4 md:px-16 py-4 text-center">Identity Verification Question (Required by the DMV)</h2>
                <p class="py-8 px-8 xl:px-36">As an added security measure, questions will be asked at various points throughout the course to help verify that you are taking the course yourself. All traffic school providers are required by the CA DMV to ask verification questions.</p>
                <p class="px-8 xl:px-36">Please answer the following identity verification question in order to continue.</p>
                <form class="w-full mx-auto mt-6 max-w-2xl bg-white rounded-lg shadow-md p-8" method="post">

                    <div class="mb-4 py-4">
                        <h3 class="text-3xl font-bold text-blue-600 py-6">Question: What day of the month were you born?</h3>
                        <label class="block text-gray-700 font-bold mb-2" for="birthDay">
                            Select your day of birth:
                        </label>
                        <select class="appearance-none border rounded w-full py-4 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="birth-day" id="birthDay">
                            <option value="">Day</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28">28</option>
                            <option value="29">29</option>
                            <option value="30">30</option>
                            <option class="py-4" value="31">31</option>
                        </select>

                        <p class="text-red-600 pt-3 error-message"></p>

                    </div>

                    <button class="text-center bg-blue-600 py-3 text-white font-bold w-full rounded hover:bg-blue-700" type="submit">Continue</button>
                </form>

            </div>
        </div>
    </main>

@endsection

@section('scripts')
    <script>
        $('form').on('submit', function (e) {
            e.preventDefault();
            let birthDay = $('#birthDay').val();
            console.log(birthDay);
            $.ajax({
                type: "post",
                url: "{!! route('verify', ['id' => request()->id]) !!}",
                data: {'day':birthDay},
                dataType: "json",
                success: function (response) {
                    if(response.success){
                        return window.location.href = response.message;
                    }
                    if(!response.success){
                        $('.error-message').html(response.message);
                    }
}
});
// $('.error-message').
// let form = $(this).parent('form');
// console.log(form)

});
</script>
@endsection
