<x-layout>
    <div class="container-fluid">
        <div class="row">  
            <div class="col-12 col-md-5">
                <img src="/img/Form.png" class="img-fluid" alt="">
            </div>
    
            <div class="col-12 col-md-7">
                <form>
                    <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nome e Cognome</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Indirizzo Email</label>
                    <input type="email" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Richiesta informazioni</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Richiedi le informazioni necessarie"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>   
</x-layout>