@extends('partials.main')
@section('content')

    <div class="breadcrumb">
        <h1 class="mr-2">Version 1</h1>
        <ul>
            <li><a href="#">Dashboard</a></li>
            <li>Version 1</li>
        </ul>
    </div>
    <div class="separator-breadcrumb border-top"></div>
    <div class="col-12 d-flex justify-content-center">
        <div class="col-md-6 mb-4">
            <div class="card border-0 shadow">
                <div class="col-12 p-4">
                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/TGlgD1O_y8U" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>

                <div class="col-12 p-4">

                    <table class="table">
                        <thead>
                        <tr class="text-center">
                            <td colspan="2">Kategori</td>
                            <td>Negatif</td>
                            <td>Netral</td>
                            <td>Positif</td>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>G</td>
                            <td><label>Test kategori 1</label></td>
                            <td class="text-center"><input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1"></td>
                            <td class="text-center"><input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2"></td>
                            <td class="text-center"><input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3"></td>
                        </tr>
                        <tr>
                            <td>C</td>
                            <td><label>Test kategori 2</label></td>
                            <td class="text-center"><input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1"></td>
                            <td class="text-center"><input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2"></td>
                            <td class="text-center"><input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3"></td>
                        </tr>
                        <tr>
                            <td>E</td>
                            <td><label>Test kategori 3</label></td>
                            <td class="text-center"><input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1"></td>
                            <td class="text-center"><input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2"></td>
                            <td class="text-center"><input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3"></td>
                        </tr>
                        <tr>
                            <td>A</td>
                            <td><label>Test kategori 4</label></td>
                            <td class="text-center"><input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1"></td>
                            <td class="text-center"><input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2"></td>
                            <td class="text-center"><input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3"></td>
                        </tr><tr>
                            <td>N</td>
                            <td><label>Test kategori 5</label></td>
                            <td class="text-center"><input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1"></td>
                            <td class="text-center"><input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2"></td>
                            <td class="text-center"><input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3"></td>
                        </tr>
                        </tbody>
                    </table>
                    <div class="col-12 text-center mb-4">
                        <button class="btn btn-success">Submit</button>
                        <button class="btn btn-warning">Skip</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h3>Result</h3>
        </div>
        <div class="card-body">

        </div>
    </div>
@endsection

