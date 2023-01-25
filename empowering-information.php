<style>

.main-timeline-linking{ font-family: 'Roboto', sans-serif; }
.main-timeline-linking:after{
    content: '';
    display: block;
    clear: both;
}
.main-timeline-linking .timeline{
    width: 100%;
    padding: 12px;
    margin: 0 5px 0 0;
    float: left;
    position: relative;
    z-index: 1;
}
.main-timeline-linking .timeline-content{
    background: #fff;
    min-height: 165px;
    padding: 30px 25px 35px 25px;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.3);
    display: block;
    position: relative;
}
.main-timeline-linking .timeline-content:hover{ text-decoration: none; }
.main-timeline-linking .timeline-content:before,
.main-timeline-linking .timeline-content:after{
    content: "";
    background: #d7437a;
    width: 80px;
    height: 55%;
    position: absolute;
    top: -8px;
    left: -8px;
    z-index: -1;
}
.main-timeline-linking .timeline-content:after{
    top: auto;
    left: auto;
    bottom: -8px;
    right: -8px;
}
.main-timeline-linking .timeline-year{
    color: #fff;
    /*background: #f24709;*/
    font-size: 30px;
    font-weight: 800;
    text-align: center;
    line-height: 165px;
    width: 95px;
    /*box-shadow: 10px 5px 10px rgba(0, 0, 0, 0.2);*/
    position: absolute;
    left: 20px;
    top: -12px;
    bottom: -12px;
}
.main-timeline-linking .timeline-year:before{
    content: "";
  /*  background: linear-gradient(to top right, #6C433F 49%, transparent 50%);*/
    width: 12px;
    height: 12px;
    position: absolute;
    top: 0;
    right: -12px;
}
.main-timeline-linking .timeline-icon{
    color: #f24709;
    font-size: 35px;
    line-height: 40px;
    position: absolute;
    bottom: 10px;
    right: 10px;
}
.main-timeline-linking .title{
    color: #049fb3;
    font-size: 22px;
    font-weight: 500;
    text-transform: capitalize;
    letter-spacing: 0.1px;
    margin: 0 0 10px 0;
    line-height: 26px !important;
}
.main-timeline-linking .description{
    color: #232323;
    font-size: 15px;
    letter-spacing: 0.1px;
    margin: 0;
}
.main-timeline-linking .timeline:nth-child(even){
    float: right;
    margin: 0 0 0 5px;
}
.main-timeline-linking .timeline:nth-child(even) .timeline-content{ padding: 20px 140px 60px 20px; }
.main-timeline-linking .timeline:nth-child(even) .timeline-content:before{
    left: auto;
    right: -10px;
}
.main-timeline-linking .timeline:nth-child(even) .timeline-content:after{
    right: auto;
    left: -10px;
}
.main-timeline-linking .timeline:nth-child(even) .timeline-year{
    /*box-shadow: -10px 5px 10px rgba(0, 0, 0, 0.3);*/
    left: auto;
    right: 10px;
}
.main-timeline-linking .timeline:nth-child(even) .timeline-year:before{
    transform: rotateY(180deg);
    right: auto;
    left: -12px;
}
.main-timeline-linking .timeline:nth-child(even) .timeline-icon{
    right: auto;
    left: 10px;
}
.main-timeline-linking .timeline:nth-child(4n+2) .timeline-content:before,
.main-timeline-linking .timeline:nth-child(4n+2) .timeline-content:after,
.main-timeline-linking .timeline:nth-child(4n+2) .timeline-year{
    /*background: #F88800;*/
}
.main-timeline-linking .timeline:nth-child(4n+2) .timeline-icon,
.main-timeline-linking .timeline:nth-child(4n+2) .title{
    color: #F88800;
}
.main-timeline-linking .timeline:nth-child(4n+2) .timeline-year:before{
    /*background: linear-gradient(to top right, #af5807 49%, transparent 50%);*/
}
.main-timeline-linking .timeline:nth-child(4n+3) .timeline-content:before,
.main-timeline-linking .timeline:nth-child(4n+3) .timeline-content:after,
.main-timeline-linking .timeline:nth-child(4n+3) .timeline-year{
    background: #2E475D;
}
.main-timeline-linking .timeline:nth-child(4n+3) .timeline-icon,
.main-timeline-linking .timeline:nth-child(4n+3) .title{
    color: #2E475D;
}
.main-timeline-linking .timeline:nth-child(4n+3) .timeline-year:before{
    background: linear-gradient(to top right, #041b2b 49%, transparent 50%);
}
.main-timeline-linking .timeline:nth-child(4n+4) .timeline-content:before,
.main-timeline-linking .timeline:nth-child(4n+4) .timeline-content:after,
.main-timeline-linking .timeline:nth-child(4n+4) .timeline-year{
    background: #5ca51c;
}
.main-timeline-linking .timeline:nth-child(4n+4) .timeline-icon,
.main-timeline-linking .timeline:nth-child(4n+4) .title{
    color: #5ca51c;
}
.main-timeline-linking .timeline:nth-child(4n+4) .timeline-year:before{
    background: linear-gradient(to top right, #345614 49%, transparent 50%);
}
@media screen and (max-width:767px){
    .main-timeline-linking .timeline,
    .main-timeline-linking .timeline:nth-child(even){
        width: 100%;
        margin: 0 0 20px 0;
    }
}
@media screen and (max-width:479px){
    .main-timeline-linking .timeline .timeline-content,
    .main-timeline-linking .timeline:nth-child(even) .timeline-content{
        padding: 60px 20px;
    }
    .main-timeline-linking .timeline .timeline-year,
    .main-timeline-linking .timeline:nth-child(even) .timeline-year{
        height: 55px;
        line-height: 55px;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.3);
        right: 10px;
        left: auto;
    }
    .main-timeline-linking .timeline:nth-child(even) .timeline-year{
        top: -10px;
        bottom: auto;
        left: 10px;
    }
}

</style>




<div class="container">
    <div class="row">
        <div class="">
            <div class="main-timeline-linking">



               	<div class="col-12 col-lg-6 col-md-6 col-sm-12">
                <div class="timeline">
                    <a href="" class="timeline-content">
                       
                        <h3 class="title">A Commitment To Support And Guidance</h3>
                        <p class="description justify">
                            We understand that the journey towards parenthood can be a transformative experience that can profoundly affect you emotionally as well as physically. Therefore, we offer many different types of support to care for you on all levels.<br><br>
                            Our entire team, from physicians to nurses all the way to the administrative staff, is honored to support you.  We celebrate your success and help you through any struggles as if they were our own.
                        </p>
                       
                    </a>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="timeline">
                    <a href="" class="timeline-content">
                       
                        <h3 class="title">Empowering Informed Decisions</h3>
                        <p class="description justify">
                            We place extra attention on providing you with the right information to help you make informed decisions about your fertility treatment and other available options. We are the only fertility center to have a targeted Centers of Excellence program that focuses on the latest treatment methods to treat specific infertility diagnosis.<br>
                            Our Centers of Excellence program enables our teams to utilize the latest advancements in treatment options and technology. This ensures that you are receiving the best possible treatment for your individual diagnosis.
                        </p>
                      
                    </a>
                </div>
            </div>




            </div>
        </div>
    </div>
</div>