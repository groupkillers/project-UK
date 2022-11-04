<template>
	<div>
    <div 
			class="wrapper"
		>
			<nav 
				id="sidebar"
			>
				<div 
					class="sidebar-header"
				>
					<h3>Project Name</h3>
				</div>
				<ul 
					class="list-unstyled components">
						<p>Dash board</p>
						<li>
							<a 
								href="#"
							>
								About
							</a> 
						</li>
						<li>
							<a 
								href="#"
							>
								About
							</a>    
						</li>
						<li>
							<a 
								href="#"
							>
								Portfolio
							</a>
						</li>
						<li>
							<a 
								href="#"
							>
								Contact
							</a>
						</li>
				</ul>

				<ul 
					class="list-unstyled CTAs"
				>
					<li>
						<a 
							href="https://bootstrapious.com/tutorial/files/sidebar.zip" 
							class="download"
						>
							Download source
						</a>
					</li>
					<li>
							<a 
								href="https://bootstrapious.com/p/bootstrap-sidebar" 
								class="article"
							>
								Back to article
							</a>
					</li>
				</ul>
			</nav>

			<!-- Page Content Holder -->
			<div 
				id="content"
			>
				<nav 
					class="navbar navbar-expand-lg navbar-light bg-light"
				>
					<div 
						class="container-fluid"
					>
						<div 
							class="collapse navbar-collapse" 
							id="navbarSupportedContent"
						>
							<ul 
								class="nav navbar-nav ml-auto"
							>
								<li 
									class="nav-item active"
								>
									<a 
										class="nav-link" 
										href="#"
									>
										<i 
											class="fa-solid fa-gear"
										></i>
									</a>
								</li>
								<li 
									class="nav-item"
								>
									<a 
										class="nav-link" 
										href="#"
									>
										Page
									</a>
								</li>
								<li 
									class="nav-item"
								>
									<a 
										class="nav-link" 
										href="#"
									>
										<i 
											class="fa-sharp fa-solid fa-user"
										></i>
									</a>
								</li>
								<li 
									class="nav-item"
								>
									<a 
										class="nav-link" 
										href="#"
									>
										Page
									</a>
								</li>
							</ul>
						</div>
					</div>
				</nav>

				<router-view></router-view>
				
			</div>
    </div>
	</div>
</template>



<script>
	
</script>
