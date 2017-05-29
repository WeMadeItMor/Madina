

<link href="/asset/css/bootstrap.min.css" rel="stylesheet">
<link href="/admin/css/sb-admin.css" rel="stylesheet">
<link rel="stylesheet" href="/asset/css/style.css" type="text/css">


    <div class="row">
        @if($dossier->case == '3')
            <div class="receipt-main col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3"
                 style="border: solid;
                     background-color: lightsalmon;
                     color: firebrick;">

                @else

                    <div class="receipt-main col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3"
                         style="border: solid;
                     background-color: lightblue;
                     color: navy;">
                        @endif<hr/>
                        <div class="row">
                            <div class="receipt-header">
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <div class="receipt-left">
                                        <img class="img-responsive" alt="iamgurdeeposahan" src="/asset/img/suarl.png"
                                             style="width:
                            71px; border-radius: 43px;">
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6 text-right">
                                    <div class="receipt-right">
                                        <h5>Madina Transit Transport Logistique.</h5>
                                        <p>+221 33 823 38 03 - 77 532 59 53 <i class="fa fa-phone"></i></p>
                                        <p>madinatransit@gmail.com <i class="fa fa-envelope-o"></i></p>
                                        <p>29 Avenue de la Liberation, Dakar, Sénégal <i class="fa fa-location-arrow"></i></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="receipt-header receipt-header-mid">
                                <div class="col-xs-8 col-sm-8 col-md-8 text-left">
                                    <div class="receipt-right">
                                        <p><b><u>Numéro Répertoire</u> :</b>  {{ $dossier->repertoire }}</p>
                                        <p><b><u>Envoyeur</u>:</b> {{ $dossier->prenomEnvoyeur }} {{ $dossier->nomEnvoyeur
                            }}</p>
                                        <p><b><u>Nom Destinataire</u>:</b> {{ $dossier->nomDest }}</p>
                                        <p><b><u>Prénom Destinataire</u> :</b> {{ $dossier->prenomDest }}</p>
                                        <p><b><u>Régime</u> :</b> {{ $dossier->regime }}</p>
                                        <p><b><u>Navire</u> :</b> {{ $dossier->navire }}</p>
                                    </div>
                                </div>
                                <div class="col-xs-4 col-sm-4 col-md-4">
                                    <div class="receipt-left">
                                        <p><b><u>Dépositaire</u> :</b>{{ $dossier->depositaire }}</p>
                                        <p><b><u>Nombre de Collis</u> :</b> {{ $dossier->nbrColis }}</p>
                                        <p><b><u>Numéro Conteneur</u> :</b> {{ $dossier->numConteneur }}</p>
                                        <p><b><u>Date Ouverture </u> :</b> {{ $dossier->created_at->format('d/m/Y') }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <table class="table table-bordered" style="color: navy; ">
                                <thead>
                                <tr>
                                    <th><u>Numéro Bill Of Landing</u></th>
                                    <th> {{ $dossier->numBl }}</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="col-md-9"><b><u>Pays d'origine</u></b></td>
                                    <td class="col-md-3"><b>  {{ $dossier->pays }}</b></td>
                                </tr>
                                <tr>
                                    <td class="col-md-9"><b><u>Taille</u></b></td>
                                    <td class="col-md-3"><b>{{ $dossier->taille }}'</b></td>
                                </tr>
                                <tr>
                                    <td class="col-md-9"><b><u>Type</u></b></td>
                                    <td class="col-md-3"><b>{{ $dossier->type }}</b></td>
                                </tr>
                                <tr>
                                    <td class="col-md-9"><b><u>Poids</u></b></td>
                                    <td class="col-md-3"><b>{{ $dossier->poids }} Kg</b></td>
                                </tr>
                                @if($dossier->case == '1')
                                    <tr>
                                        <td class="col-md-9"><b><u>N° Manifeste</u></b></td>
                                        <td class="col-md-3"><b>{{ $dossier->manifeste }}</b></td>
                                    </tr>
                                    <tr>
                                        <td class="col-md-9"><b><u>N° Déclaration</u></b></td>
                                        <td class="col-md-3"><b>{{ $dossier->declaration }}</b></td>
                                    </tr>
                                    <tr>
                                        <td class="col-md-9"><b><u>Date déclaration</u></b></td>
                                        <td class="col-md-3"><b>{{ $dossier->date->format('d/m/Y') }}</b></td>
                                    </tr>

                                    <tr>
                                        <td class="col-md-9"><b><u>Valeur Douane</u></b></td>
                                        <td class="col-md-3"><b>{{ $dossier->douane }}</b></td>
                                    </tr>
                                    <tr>
                                        <td class="col-md-9"><b><u>Droits Douane</u></b></td>
                                        <td class="col-md-3"><b>{{ $dossier->droit }}</b></td>
                                    </tr>
                                @endif


                                @if($dossier->case == '2')
                                    <tr>
                                        <td class="col-md-9"><b><u>N° Manifeste</u></b></td>
                                        <td class="col-md-3"><b>{{ $dossier->manifeste }}</b></td>
                                    </tr>
                                    <tr>
                                        <td class="col-md-9"><b><u>N° Déclaration</u></b></td>
                                        <td class="col-md-3"><b>{{ $dossier->declaration }}</b></td>
                                    </tr>
                                    <tr>
                                        <td class="col-md-9"><b><u>Date déclaration</u></b></td>
                                        <td class="col-md-3"><b>{{ $dossier->date->format('d/m/Y') }}</b></td>
                                    </tr>

                                    <tr>
                                        <td class="col-md-9"><b><u>Valeur Douane</u></b></td>
                                        <td class="col-md-3"><b>{{ $dossier->douane }}</b></td>
                                    </tr>
                                    <tr>
                                        <td class="col-md-9"><b><u>Droits Douane</u></b></td>
                                        <td class="col-md-3"><b>{{ $dossier->droit }}</b></td>
                                    </tr>
                                    <tr>
                                        <td class="col-md-9"><b><u>N° Orbus</u></b></td>
                                        <td class="col-md-3"><b>{{ $dossier->orbus }}</b></td>
                                    </tr>
                                    <tr>
                                        <td class="col-md-9"><b><u>Libelle</u></b></td>
                                        <td class="col-md-3"><b>{{ $dossier->libelle }}</b></td>
                                    </tr>
                                    <tr>
                                        <td class="col-md-9"><b><u>Date Payement</u></b></td>
                                        <td class="col-md-3"><b>{{ $dossier->date->format('d/m/Y') }}</b></td>
                                    </tr>

                                    <tr>
                                        <td class="col-md-9"><b><u>Date Bon à Enlever</u></b></td>
                                        <td class="col-md-3"><b>{{ $dossier->datebea->format('d/m/Y') }}</b></td>
                                    </tr>
                                @endif
                                <tr>

                                    <td class="col-md-9" ><b style="color:
                        darkred"><strong><u>Status</u>
                                            </strong></b></td>
                                    @if($dossier->case == '2')
                                        <td class="col-md-3">   <b style="color: #16a085">Finalisé</b> </td>
                                    @endif
                                    @if($dossier->case == '3')
                                        <td class="col-md-3">   <b style="color: darkgoldenrod">Annulé</b> </td>
                                    @endif
                                    @if($dossier->case == '1')
                                        <td class="col-md-3">   <b style="color: #34495e">Déclaré</b> </td>
                                    @endif
                                    @if($dossier->case == '0')
                                        <td class="col-md-3">   <b style="color: #c0392b">Ouvert</b> </td>
                                    @endif


                                </tr>





                                </tbody>
                            </table>
                        </div>

                        <div class="row">
                            <div class="receipt-header receipt-header-mid receipt-footer">
                                <div class="col-xs-8 col-sm-8 col-md-8 text-left">
                                    <div class="receipt-right">
                                        <p><b><u>Date</u> : </b>{{ $dossier->created_at->format('d/m/Y') }}</p>
                                        <h5 style="color: rgb(40, 130, 140);">Le meilleur du Transit!</h5>
                                    </div>
                                </div>
                                <div class="col-xs-4 col-sm-4 col-md-4">
                                    <div class="receipt-left">
                                        <!-- <h1>Signature</h1> -->
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
            </div>
    </div>