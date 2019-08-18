<footer class="footer-distributed">

        <div class="footer-right">

            <a href="#"><i class="fab fa-facebook-square"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
            <a href="#"><i class="fas fa-envelope"></i></a>
            <a href="#"><i class="fas fa-street-view"></i></a>

        </div>

        <div class="footer-left">
            
        <p>Ataa Group &copy; {{date('Y')}}</p>
            <p>Developed by:<a href="ababdoiuy@gmail.com">Mohammad Abdl Mouty</a> </p>
        </div>

    </footer>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
@yield('script')
<script src="js/all.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script>
    $('.product-search').on('keyup',function(){
        let xml = new XMLHttpRequest();
        xml.open('GET','/products/search/'+$(this).val()+'');
        xml.onload = function(){
            if(xml.readyState < 4){
                let spinner =  `<i class="fas fa-spinner fa-spin"></i>`;
                $('.products-content').html(spinner)
            }
            if(xml.readyState == 4 && xml.status == 200){
               let data = JSON.parse(xml.response);
               let j = 0;
               let print = `<div class="row">`;
               for(let i = 0;i<data.length;i++){
                    
                    if(j==3){

                        print += `</div><div class="row">`;
                    }
                    print +=`<div class="card-content col-md-4 col-sm-12  ">
                        <div class="front">
                        <h3>${data[i].name}</h3>
                            <img src="img/product.png">
                        </div>
                        <div class="back">
                            back
                        </div>
                </div>`;
                    j = j+1;
               }
               print += `</div>`;
               $('.products-content').html(print)
            }
        }
        xml.send();
    })
</script>
</body>
</html>