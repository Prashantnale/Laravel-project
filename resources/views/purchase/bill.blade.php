<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Sarabun:wght@100;300;700&display=swap');
@import url('https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Thai:wght@100;400;600&display=swap');

body {
    font-family: 'Sarabun', sans-serif;
    background-color: #333333
}

hr {
    color: #0000004f;
    margin-top: 5px;
    margin-bottom: 5px
}

.add td {
    color: #c5c4c4;
    text-transform: uppercase;
    font-size: 12px
}

.content {
    font-size: 14px
}

.card-kasikron {
    height: 120px;
    width: 100%;
    border-radius: 20px;
    background-image: linear-gradient(to top right, #41ad03, #41ad03);
    padding: 10px;
    padding-right: 20px;
    padding-left: 20px;
    color: #fff;
    position: relative;
    overflow: hidden;
    cursor: pointer
}

.card-kasikron .line-1 {
    height: 200px;
    width: 200px;
    display: flex;
    clip-path: polygon(50% 0%, 15% 100%, 78% 100%);
    opacity: 0.6;
    background: #94ff00;
    position: absolute;
    bottom: 90px;
    right: -30px;
    transform: rotate(45deg);
    animation: anim 3s infinite
}

.card-kasikron .line-2 {
    height: 300px;
    width: 300px;
    display: flex;
    clip-path: polygon(50% 0%, 0% 100%, 100% 100%);
    opacity: 0.4;
    background: #94ff00;
    position: absolute;
    top: -30px;
    right: -30px;
    transform: rotate(70deg);
    animation: anim 3s infinite;
    animation-delay: 2s
}

.card-kasikron .line-3 {
    height: 200px;
    width: 200px;
    display: flex;
    clip-path: polygon(100% 0, 0 55%, 78% 100%);
    opacity: 0.3;
    background: #94ff00;
    position: absolute;
    top: -30px;
    right: -30px;
    transform: rotate(70deg);
    animation: anim 3s infinite;
    animation-delay: 4s
}

@keyframes anim {
    from {
        opacity: 0.3;
        transform: rotate(0deg)
    }

    to {
        opacity: 0.8;
        transform: rotate(180deg)
    }
}

.visa h4 {
    font-size: 40px;
    font-family: 'IBM Plex Sans Thai', serif
}

.visa span {
    margin-left: 2px;
    font-family: 'IBM Plex Sans Thai', serif
}

.visa img {
    width: 50px
}

.card .visa i {
    font-size: 50px
}

.tick {
    height: 25px;
    width: 75px;
    background-color: #333333;
    border-radius: 7px;
    color: #fff;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 15px;
    font-family: 'IBM Plex Sans Thai', serif;
    margin-top: 6px
}

.tick i {
    transition: all 1s
}

.card:hover .tick i {
    transform: rotate(360deg)
}

.top-row {
    display: flex;
    justify-content: space-between;
    position: relative
}

.bottom-row {
    display: flex;
    flex-direction: row;
    align-items: center;
    position: absolute;
    bottom: 5px
}

.bottom-row .dots {
    display: flex;
    flex-direction: row;
    margin-right: 7px
}

.bottom-row .dots span {
    height: 6px;
    width: 6px;
    background-color: #fff;
    border-radius: 50%;
    margin: 0 2px
}

.bottom-row .number {
    font-size: 20px;
    font-family: 'IBM Plex Sans Thai', serif;
    font-weight: 600
}
    </style>
</head>
<body>
    <div class="container mt-5 mb-3">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="d-flex flex-row p-2 justify-content-center"> 
                        <img src="https://ubill.xyz/images/inv-1.png" width="48">
                        <div class="d-flex flex-column"> <span class="font-weight-bold">Bill Invoice</span> <small>INV-001</small> </div>
                    </div>
                    <hr>
                    <div class="table-responsive p-2">
                        <table class="table table-borderless">
                            <tbody>
                                <tr class="add">
                                    <td>FROM</td>
                                    <td>TO</td>
                                </tr>
                                <tr class="content">
                                    <td class="font-weight-bold">Party Name :- {{$data->party_name}} <br>Invoice No:- {{$data->invoice_no}} , <br>phaltan.</td>
                                    <td class="font-weight-bold">Date:- {{$data->date}}  <br> Payment Method:- {{$data->payment}},<br>Pune.</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <hr>
                    <div class="products p-2">
                        <table class="table table-borderless">
                            <tbody>
                                <tr class="add">
                                    <td>PRODUCT LIST</td>
                                    <td>QUANTITY</td>
                                    <td>PRICE/UNIT</td>
                                    <td class="text-center">TOTAL</td>
                                </tr>
                                @foreach ($multy as $item)
                               
                                <tr class="content">
                                    <td>{{$item->p_name}}</td>
                                    <td>{{$item->qty}}</td>
                                    <td>{{$item->rate}}</td>
                                    <td class="text-center">{{$item->totale}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <hr>
                    <div class="products p-2">
                        <table class="table table-borderless">
                            <tbody>
                                <tr class="add">
                                    <td class="text-center"><h3>Total</h3></td>
                                </tr>
                                <tr class="content">
                                    <td class="text-center"><h2>{{$total}}</h2></td>
                                </tr>
                            </tbody>
                        </table>
                         
                    </div>
                    <hr>
                    <div class="address p-2">
                        <table class="table table-borderless">
                            <tbody>
                                <tr class="add">
                                    <td><b>PAYMENT METHOD</b></td>
                                </tr>
                                <tr class="content">
                                    <td> <div class="container">
                                      <div class="card-kasikron"> <span class="line-1"></span> <span class="line-2"></span> <span class="line-3"></span>
                                          <div class="top-row">
                                              <div class="visa">
                                                  <h4>Prashant Nale</h4> <span>prashant</span>
                                              </div>
                                              <div class="tick"> <i class="fa fa-copy"></i> copy </div>
                                          </div>
                                          <div class="bottom-row">
                                              <span class="number">0691679721</span>
                                          </div>
                                      </div>
                                  </div>
                                  </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-end">
                         <button class="btn btn-success m-2" onclick="window.print()">Print</button>
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>