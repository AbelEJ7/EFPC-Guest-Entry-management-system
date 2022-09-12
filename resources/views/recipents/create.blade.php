<x-layout>
<form action="">
                    <div class="row">
                        <div class="col">
                            <label for="f_name">First name:</label>
                            <input class="form-control" type="text" id="f_name" name="f_name">
                        </div>
                        <div class="col">
                            <label for="l_name">Last name:</label>
                            <input class="form-control" type="text" id="l_name" name="l_name">
                        </div>
                        <div class="col">
                            <label for="email"> Email:</label>
                            <input class="form-control" type="email" id="email" name="email">
                        </div>
                        <div class="col">
                            <label for="pass">Password:</label>
                            <input class="form-control" type="password" id="pass" name="pass">
                        </div>
                        <div class="col">
                        </div>
                    </div>
                    <div class="btwraper">
                        <button class="bt" type="submit">Join</button>
                    </div>
                    @if($errors->any())
        <div class="row collapse">
            <ul class="alert-box warning radius">
                @foreach($errors->all() as $error)
                    <li> {{ $error }} </li>
                @endforeach
            </ul>
        </div>
        @endif
                    
                </form>
            </div>

</x-layout>