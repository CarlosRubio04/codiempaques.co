
<?php if(!isset($_REQUEST['content'])){
echo '<div class="container">
	<div class="row">
		<div class="col-md-9">
		</div>
		<div class="col-md-3">
			<div class="pull-rigth">
				<ul>
					<li>
						<a href="#">
							<img src="./img/icono-face-grey.png" alt=""> Buscar
						</a>
					</li>
					<li>
						<a href="#">
							<img style"width: 8px" src="./img/icono-face-white.png" alt="">
						</a>
					<li>
						<a href="#">
							<img  style"width: 20px src="./img/icono-tw-white.png" alt="">
						</a>
					</li>
					<li>
						<a href="#">
							<img style"width: 20px src="./img/icono-ins-white.png" alt="">
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>';
}elseif($_REQUEST['content']=='info'){
echo '<div class="container">
	<div class="row">
	<div class="col-md-9">
		</div>
		<div class="col-md-3">
			<div class="pull-rigthC">
				<ul>
					<li>
						<a href="#">
							<img src="./img/icono-face-grey.png" alt=""> Buscar
						</a>
					</li>
					<li>
						<a href="#">
							<img src="./img/icono-face-grey.png" alt="">
						</a>
					</li>
					<li>
						<a href="#">
							<img src="./img/icono-tw-gray.png" alt="">
						</a>
					</li>
					<li>
						<a href="#">
							<img src="./img/icono-ins-grey.png" alt="">
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>';
}else{
echo '<div class="container">
	<div class="row">
	<div class="col-md-9">
		</div>
		<div class="col-md-3">
			<div class="pull-rigth">
				<ul>
					<li>
						<a href="#">
							<img src="./img/icono-face-grey.png" alt=""> Buscar
						</a>
					</li>
					<li>
						
					</li>
					<li>
						
					</li>
					<li>
						
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>';
} ?>