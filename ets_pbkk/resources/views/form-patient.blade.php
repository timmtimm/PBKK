<x-app-layout>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Form Patient') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h2>Form Patient</h2>
                    <form method="POST" action="{{route('process-form')}}" enctype="multipart/form-data">
                        @csrf
                        
                        @isset($success)
                        <div class="alert alert-success alert-block">
                            <strong>{{ $success }}</strong>
                        </div>
                    @endisset

                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <div class="mb-3">
                          <label for="pasien" class="form-label">Pasien</label>
                          <select name="pasien" class="form-control" id="pasien">
                            <option value="volvo">Volvo</option>
                            <option value="saab">Saab</option>
                            <option value="opel">Opel</option>
                            <option value="audi">Audi</option>
                        </select>
                        </div>
                        <div class="mb-3">
                            <label for="dokter" class="form-label">Dokter</label>
                            <select name="dokter" class="form-control" id="dokter">
                                <option value="volvo">Volvo</option>
                                <option value="saab">Saab</option>
                                <option value="opel">Opel</option>
                                <option value="audi">Audi</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="kondisi" class="form-label">Kondisi kesehatan</label>                            
                            <textarea class="form-control" placeholder="" id="kondisi" name="kondisi" style="height: 100px"></textarea>
                          </div>
                          
                        <div class="mb-3">
                            <label for="suhu" class="form-label">Suhu tubuh</label>
                            <input type="text" class="form-control" name="suhu" placeholder="">
                        </div>

                        <div class="mb-3">
                            <label for="resep" class="form-label">Resep</label>
                            <input type="file" class="form-control" name="resep">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>                      
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
