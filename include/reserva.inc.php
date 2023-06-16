<?php
?>
<div class="modal fade" id="BookingModal" tabindex="-1" aria-labelledby="BookingModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="mb-0">Faça uma reserva</h3>

                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body d-flex flex-column justify-content-center">
                <div class="booking">
                    
                    <form class="booking-form row" role="form" action="#" method="post">
                        <div class="col-lg-6 col-12">
                            <label for="name" class="form-label">Nome Completo <small style="color:red">*</small></label>

                            <input type="text" name="name" id="name" class="form-control" placeholder="Nome" required>
                        </div>

                        <div class="col-lg-6 col-12">
                            <label for="email" class="form-label">E-mail</label>

                            <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="nome@email.com">
                        </div>

                        <div class="col-lg-6 col-12">
                            <label for="phone" class="form-label">Número de Telemóvel <small style="color:red">*</small></label>

                            <input type="telephone" name="phone" id="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" class="form-control" placeholder="123-456-7890">
                        </div>

                        <div class="col-lg-6 col-12">
                            <label for="people" class="form-label">Pessoas <small style="color:red">*</small></label>

                            <input type="text" name="people" id="people" class="form-control" placeholder="12 pessoas">
                        </div>

                        <div class="col-lg-6 col-12">
                            <label for="date" class="form-label">Data <small style="color:red">*</small></label>

                            <input type="date" name="date" id="date" value="" class="form-control">
                        </div>
                        <div class="col-lg-6 col-12">
                            <label for="time" class="form-label">Hora <small style="color:red">*</small></label>
                            <input type="time" name="date" id="time" value="" class="form-control" onchange="let val = document.getElementById('time').value.split(':'); alert(val)">
                        </div>

                        <div class="col-12">
                            <label for="message" class="form-label">Detalhes Especiais</label>

                            <textarea class="form-control" rows="4" id="message" name="message" placeholder=""></textarea>
                        </div>

                        <div class="col-lg-4 col-12 ms-auto">
                            <button type="submit" class="form-control">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="modal-footer"></div>
            
        </div>
        
    </div>
</div>
