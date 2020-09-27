
<style>
    body{
        background-image: url("/img/orcamento.jpg");
        
        /* Full height */
        height: 100%;

        /* Center and scale the image nicely */
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
                
    }

    .btn{
        margin-right: 20px;
    }

    .contato{
        background-color: #000000;
        opacity: 0.8;
        border-radius: 10px;

    }
  
    
</style>

<div class=" container contato ">

<div class="row center ">
    <h3 class="texto red-text center ">Faça seu orçamento</h3>
</div>

<div class="row  ">
        <form method="POST" action="" class="col s12">
            
        <div class="row">
            <div class="input-field col s6">
            <i class="material-icons red-text prefix">account_circle</i>
            <input class="" name="primeiro-nome" placeholder="Primeiro nome" id="first_name" type="text" class="validate">
            <label>Primeiro nome</label>
            </div>
            <div class="input-field col s6">
            <input name="segundo-nome" placeholder="Segundo nome" type="text" class="validate">
            <label class="" for="last_name">Segundo nome</label>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s6">
            <i class="material-icons prefix red-text">email</i>
            <input name="email" placeholder="E-mail" type="email" class="validate">
            <label class="" for="email">Email</label>
            </div>

            <div class="input-field col s6">
             <i class="material-icons prefix red-text">phone</i>
             <input name="telefone"  placeholder="Telefone" type="tel" class="validate">
             <label class="" >Telefone</label>
            </div>

        </div>

        <div class="row">

             <div class="input-field col s6">
            <i class="material-icons prefix red-text">home</i>
            <input name="area-construida" type="number" min="1" class="validate">
            <label class="" >Área construida m²</label>
            </div>

           
             <div class="input-field col s6">
           
            <input name="pavimentos" type="number" min="1" class="validate">
            <label class="" >Quantidade de Pavimentos</label>
            
             </div>
        </div>

       
        

        <div class="row">

        <div class="container ">
            <h6 class="  texto red-text" >Há algum dispositivo de segurança instalado?</h6>
                 <p>
                    <label>
                        <input name="extintor" type="checkbox"  />
                        <span class="red-text" >Extintor</span>
                    </label>
                </p>

                <p>
                    <label>
                        <input name="iluminação" type="checkbox"  />
                        <span class="red-text" >Iluminação</span>
                    </label>
                </p>

                <p>
                    <label>
                        <input name="hidrante" type="checkbox" />
                        <span class="red-text">Hidrante</span>
                    </label>
                </p>

                <p>
                    <label>
                        <input name="outros" type="checkbox"  />
                        <span class="red-text" >Outros</span>
                    </label>
                </p>

                <p>
                    <label>
                        <input name="nenhum" type="checkbox"  />
                        <span class="red-text" >Nenhum</span>
                    </label>
                </p>
        </div>
        </div>


        <div class="row">
             <button  name="enviar" type="submit" class="waves-effect waves-light btn red right"><i class="material-icons right">send</i>Enviar</button>
        </div>
    </form>


    </div>

</div>
