<?php include ('header.php');?>;
<li><a href="../index.html">Home</a></li>
<li><a href="../designBikip.php">Design</a></li>
<li><a href="../designBikip.php">Design bí kíp</a></li>
</ol>
<h1>Atomic CSS, Vì Một Thế Giới Hoà Bình</h1>
<div class="post_commentbox"> <a href="#"><i class="fa fa-user"></i>Wpfreeware</a> <span><i class="fa fa-calendar"></i>6:49 AM</span> <a href="#"><i class="fa fa-tags"></i>Design</a> </div>
<div class="single_page_content"> <img class="img-center" src="../images/image5.jpg" alt="">
    <p> Jenkins Scalability
        Các anh em thiện lành hay cài Jenkins trên Ubuntu bằng cách down bộ cài Jenkins về rồi cài theo guideline là có thể launch Jenkins trong vòng một nốt nhạc. Tuy nhiên đối với hệ thống lớn, có tới hàng nghìn job chạy, cần phải nghiên cứu cách scaling Jenkins

        Có nhiều cách để scale Jenkins, bài viết này hướng dẫn các scale Jenkins trên Kubernetes</p>
    <blockquote>  Chuẩn bị
        Bạn cần Google account GCE, có thể xài free trial 1 năm được
        Máy Linux Ubuntu hoặc centos
        Cài đặt Jenkins lên Kubernetes cluster
        Login to <a href="#" style="text-decoration: underline; color: blue;">https://console.cloud.google.com/</a>
        Tạo 1 projects trên GCE, thực hiện command dưới để tạo 1 cluster tên jenkins-cd with 2 nodes.

        gcloud container clusters create jenkins-cd  --machine-type n1-standard-2 --num-nodes 2</blockquote>
    <p>
        Để tiết kiệm chi phí có thể resize cluster về 0 nếu ko xài đến
        gcloud container clusters resize $CLUSTER_NAME --size=0
        Click connect to để lấy command kết nối với cluster.</p>

<?php include ('footer.php');?>;