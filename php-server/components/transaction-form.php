<h6 class="pt-3 pb-2 mx-3 mb-0 border-bottom border-gray">New Transaction</h6>

<form class="mt-3 align-items-baseline" method="POST" action="/functions/transactions.php">
    <div class="row" style="width: 100%">
      <div class="col-md-10 offset-md-1 order-md-1">
        <!-- USERNAME & MONTANT & DEVISE & USER-ID -->
        <div class="row">
          <div class="mb-3 col-md-4">
            <label for="userName" class="sr-only">Username</label>
            <input type="text" class="form-control d-block " id="userName" name="userName" placeholder="Username" require>
            <div id="userList" class="m-auto rounded-bottom position-absolute" style="background-color: #6f42c1; cursor: pointer; z-index: 10; width: 90%;"></div>
            <input hidden name="userId" id="userId" value="null" require>
          </div>

          <div class="mb-3 col-md-4">
            <label for="montant" class="sr-only">Montant</label>
            <input type="text" class="form-control" id="montant" name="montant" placeholder="Montant" require>
          </div>

          <div class="mb-3 col-md-4">
            <div class="input-group">
              <select class="custom-select d-block w-100" id="devise" name="devise" required>
                <option value="">Devise...</option>
                <option value="$">$</option>
                <option value="€">€</option>
                <option value="FCFA">FCFA</option>
              </select>
            </div>
          </div>
        </div>

        <!-- QUESTION & REPONSE -->
        <div class="row">
          <div class="mb-3 col-md-12">
            <label for="question">Question</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">?</span>
              </div>
              <input type="text" class="form-control" id="question" placeholder="Question" name="question" required />
            </div>
          </div>
        </div>
        <div class="row">
          <div class="mb-3 col-md-12">
            <label for="reponse">Reponse</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">@</span>
              </div>
              <input type="text" class="form-control" id="reponse" placeholder="Reponse" name="reponse" required />
            </div>
          </div>
        </div>


        <div class="mt-5 row" style="width: 100%">
          <div class="col-md-3 offset-md-9">
            <!-- <button class="btn btn-lg btn-primary btn-block" type="submit">Sign up</button> -->
            <button class="m-auto btn btn-md btn-primary " type="submit" >Effectuer la transaction</button>
          </div>
        </div>
      </div>
    </div>

</form>
