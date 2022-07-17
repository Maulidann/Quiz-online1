@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" text-align=center>{{ __('Quiz') }}
                    <hr>
                    <div class="card-header" text-align=center>{{ __('Pilihlah 1 jawaban yang benar') }}
                        <hr>
                            <div class="card-header" text-align=center>{{ __('1. Apa itu HTML?') }}
                                <div class="card-body">
                                    <input type="radio" id="1" name="1" value="30">
                                    <label for="1">Hyper Link Markup Leaguage</label><br>

                                    <input type="radio" id="2" name="1" value="30">
                                    <label for="2">Hyper Team Markup Laguage</label><br>

                                    <input type="radio" id="3" name="1" value="30">
                                    <label for="3">Hyper Tool Markup Laguage</label><br>

                                    <input type="radio" id="4" name="1" value="30">
                                    <label for="4">Hyper Test Markup Laguage</label><br>

                                    <input type="radio" id="5" name="1" value="30">
                                    <label for="5">Hyper Text Markup Laguage</label><br>
                                </div>
                            </div>
                            <br>
                            <div class="card-header" text-align=center>{{ __('2. Jika kita ingin membuat garis datar (horizontal), kita perlu menuliskan perintah...') }}
                                <div class="card-body">
                                    <input type="radio" id="11" name="2" value="30">
                                    <label for="11">hr</label><br>

                                    <input type="radio" id="22" name="2" value="30">
                                    <label for="22">break</label><br>

                                    <input type="radio" id="33" name="2" value="30">
                                    <label for="33">br</label><br>

                                    <input type="radio" id="44" name="2" value="30">
                                    <label for="44">img</label><br>

                                    <input type="radio" id="55" name="2" value="30">
                                    <label for="55">div</label><br>
                                </div>
                            </div>
                            <br>
                            <div class="card-header" text-align=center>{{ __('3. Kode/tag awal yang memberikan identitas bahwa sebuah web page dibuat dengan pemograman HTML adalah') }}
                                <div class="card-body">
                                    <textarea name="3" id="111" cols="50" rows="2"></textarea>
                                </div>
                            </div>
                            <br>
                            <div class="card-header" text-align=center>{{ __('4. Berikut ini salah satu atribut dari tag <TEXTAREA> adalah...') }}
                                <div class="card-body">
                                    <input type="radio" id="1111" name="4" value="30">
                                    <label for="1111">VALUE</label><br>

                                    <input type="radio" id="2222" name="4" value="30">
                                    <label for="2222">SIZE</label><br>

                                    <input type="radio" id="3333" name="4" value="30">
                                    <label for="3333">ACTION</label><br>

                                    <input type="radio" id="4444" name="4" value="30">
                                    <label for="4444">NAME</label><br>

                                    <input type="radio" id="5555" name="4" value="30">
                                    <label for="5555">SELECTED</label><br>
                                </div>
                            </div>
                            <br>
                            <div class="card-header" text-align=center>{{ __('5. Setiap akhir penulisan sintak pada kode/tag HTML untuk dokumen HTML diakhiri dengan tanda...') }}
                                <div class="card-body">
                                    <textarea name="5" id="11111" cols="50" rows="2"></textarea>
                                </div>
                            </div>
                    </div>
                    <button type="button" name="tombol"><a href="{{ url('/donequiz') }}">Submit</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection