<?php header('Content-Type: text/css');?>
@import url('https://fonts.googleapis.com/css2?family=Overlock:wght@400;700;900&display=swap');
/* CSS RESET */
*{
  font-family: 'Overlock', 'cursive';
}
html,
body{
  margin: 0;
  padding: 0;
  overflow-x: hidden;
}
a{
  text-decoration: none;
}
.icon-sm{
  width: 20px;
}
tr, th, td{
  padding: 10px;
}
button{
  cursor: pointer;
}
input{
  outline: none;
}

/* MAIN STYLE */
/* Header */
header{
  background-color: #08089b;
  position: fixed;
  height: 100vh;
  display: flex;
  flex-direction: column;
  font-size: 18px;
  align-items: center;
  padding: 10px 0px;
}

header h1{
  color: white;
  padding: 0px 20px;
}

header nav{
  align-self: flex-end;
  display: flex;
  flex-direction: column;
  width: 100%;
  /* background-color: red; */
  gap: 16px;
}

header nav a{
  color: white;
  text-decoration: none;
  font-size: 20px;
  padding: 10px;
  padding-left: 70px;
  transition: 500ms all;
  /* background-color: green; */
}
header nav a:hover{
  padding-left: 90px;
  background-color: #2424b8;
}

/* Table */
.table-container{
  width: 100%;
  padding-top: 20px;
  /* padding-right: 100px; */
  display: flex;
  flex-direction: column;
  gap: 10px;
  /* background-color: red; */
}

.table-container .table-tittle{
  padding-left: 320px;
  padding-right: 30px;
  display: flex;
  align-items: center;
  justify-content: space-between;
}

.table-container .table-tittle .tittle-right{
  display: flex;
  align-items: center;
  gap: 10px;
  width: 70%;
}

.table-container .table-tittle .tittle-right form{
  display: flex;
  gap: 5px;
  width: 100%;
}

.table-container .table-tittle .tittle-right form input{
  width: 100%;
  padding: 10px;
}

.table-container .table-tittle .tittle-right form button{
  padding: 10px 20px;
  background-color: #4a4af1;
  border: none;
  color: white;
  border-radius: 5px;
  cursor: pointer;
}
.table-container .table-tittle .tittle-right form button:hover{
  background-color: #8686e9;
}

.table-container .table-tittle .tittle-right a{
  width: max-content;
  background-color: #282879;
  color: white;
  padding: 10px;
  text-align: center;
  font-weight: bold;
  border-radius: 5px;
  transition: 300ms all;
}
.table-container .table-tittle .tittle-right a:hover{
  background-color: #4646ad;
}

table{
  width: 100%;
  padding-left: 320px;
  padding-right: 30px;
  border: 1px solid white;
  border-radius: 10px;
  overflow: hidden;
}

table thead{
  background-color: rgb(182, 182, 182);
}

table thead tr th{
  text-align: start;
  padding: 20px 10px;
}

table tbody tr:nth-child(odd){
  background-color: #c4c4e6;
}

table tbody tr:nth-child(even){
  background-color: #8282f3;
}

table tbody td .btn{
  display: flex;
  gap: 10px;
}

.pembayaran tbody tr td .btn > .bayar{
  background-color: #18c218;
  color: white;
  padding: 5px;
  border-radius: 5px;
  transition: 300ms all;
}

table tbody td .btn a{
  background-color: #282879;
  padding: 5px;
  border-radius: 5px;
  transition: 300ms all;
}
table tbody td .btn > a:last-child{
  background-color: rgb(255, 58, 58);
}
table tbody td .btn a:hover{
  opacity: .8;
}

/* Form Insert dan Update */
.form-container{
  /* background-color: red; */
  display: flex;
  align-items: center;
  justify-content: center;
  height: 100vh;
}

.form-container > a{
  background-color: rgb(253, 56, 56);
  position: absolute;
  top: 0;
  left: 0;
  padding: 10px;
  border-bottom-right-radius: 10px;
  color: white;
  font-size: 26px;
  font-weight: bold;
  transition: 300ms all;
}
.form-container > a:hover{
  background-color: rgb(245, 106, 106);
}

.form-container .form-box{
  min-width: 500px;
  background-color: #39413B;
  padding: 0px 30px 30px 30px;
  border-radius: 10px;
  display: flex;
  flex-direction: column;
}

.form-container .form-box h2{
  color: white;
}

.form-container .form-box form{
  display: flex;
  flex-direction: column;
  gap: 20px;
}

.form-container .form-box form .input-box{
  display: flex;
  flex-direction: column;
  gap: 5px;
}

.form-container .form-box form .input-box label{
  color: white;
}

.form-container .form-box form .input-box input, select{
  padding: 5px 10px;
  border-radius: 5px;
  border: none;
}

.form-container .form-box form button{
  border-radius: 10px;
  padding: 10px;
  color: #fff;
  border: 1px solid #2ecc71;
  background-color: transparent;
  transition: 300ms all;
}
.form-container .form-box form button:hover{
  background-color: #2ecc71;
}


/* Laporan */
.laporan-container{
  padding-left: 320px;
  width: 100%;
  margin-bottom: 20px;
  display: flex;
  gap: 20px;

}

.laporan-container .form-box{
  background-color: #8282f3;
  width: max-content;
  padding: 20px;
  border-radius: 5px;
}

.laporan-container form{
  display: flex;
  gap: 10px;
}

.laporan-container form input, select{
  border: 1px solid #39413B;
  border-radius: 2px;
  padding-left: 10px;
}

.laporan-container .form-box form button{
  background-color: #282879;
  color: white;
  padding: 10px;
  text-align: center;
  font-weight: bold;
  border-radius: 5px;
  transition: 300ms all;
  border: none;
}
.laporan-container .form-box form button:hover{
  background-color: #4646ad;
}

/* Dashboard */
.dashboard-container{
  display: flex;
  flex-direction: column;
  padding-left: 320px;
  padding-right: 30px;
}

.dashboard-container .history-dash{
  padding-left: 0px;
  border-radius: 0;
  padding-right: 0px;
}

.dash-data{
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 20px;
}

.dash-data .data{
  padding: 20px;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  background-color: #282879;
  border-radius: 10px;
  gap: 10px;
}

.dash-data .data .count{
  display: flex;
  gap: 20px;
  justify-content: center;
  align-items: center;
}

.dash-data .data .count span{
  color: white;
  font-weight: bold;
  font-size: 4rem;
}

.dash-data .data .count img{
  width: 80px;
}

.dash-data .data p{
  font-weight: bold;
  color: white;
  font-size: 1.5rem;
}

