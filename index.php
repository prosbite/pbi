<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
	<link href="styles.css" rel="stylesheet">
	<title>Home Page</title>
</head>
<body style="overflow-x: hidden;">
	<div class="main-container w-screen">
		<section class="head flex flex-col">
			<div class="top py-4 px-60">
				<div class="logo flex flex-row items-center">
					<a href="home.html"><img src="img/logo.jpg" class="pr-16" alt="Logo"></a>
					<div class="h-16 border-l border-gray-200"></div>
					<div class="flex pl-16 items-center mr-16">
						<svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 mr-5 text-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 3l-6 6m0 0V4m0 5h5M5 3a2 2 0 00-2 2v1c0 8.284 6.716 15 15 15h1a2 2 0 002-2v-3.28a1 1 0 00-.684-.948l-4.493-1.498a1 1 0 00-1.21.502l-1.13 2.257a11.042 11.042 0 01-5.516-5.517l2.257-1.128a1 1 0 00.502-1.21L9.228 3.683A1 1 0 008.279 3H5z" />
						</svg>
						<div class="flex flex-col">
							<span class="phone text-xl font-bold mb-1 text-darkblue">(085) 343 7153 </span>
							<span class="time text-sm text-gray-300 font-bold pl-1">Call us anytime</span>
						</div>
					</div>

					<div class="flex pl-16 items-center">
						<svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 mr-5 text-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
						  </svg>
						<div class="flex flex-col">
							<span class="phone text-xl font-bold mb-1 text-darkblue">pbiagusandelsur@ymail.com </span>
							<span class="time text-sm text-gray-300 font-bold">Send us your concern</span>
						</div>
					</div>
				</div>
			</div>
			<div class="sep w-screen"></div>
			<div class="nav pl-80 pr-60 flex flex-row border-t border-gray-200">
				<a href="home.html" class="py-6 mr-20 text-gray-400 font-bold text-sm border-t-2 border-gray-50 active">HOME</a>
				<div class="flex flex-col mr-20 relative nav-dropdown">
					<a href="#" class="py-6 border-t-2 border-gray-50 text-gray-400 font-bold text-sm flex items-center">EXPLORE AGUSAN SUR
						<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 pl-2 text-gray-600 font-bold" fill="none" viewBox="0 0 24 24" stroke="currentColor">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
						</svg>
					</a>
					<div class="dropdown flex flex-col absolute left-0 top-full bg-white px-8 py-4 w-64">
						<a href="#" class="py-2 text-gray-500">The Province</a>
						<a href="#" class="py-2 text-gray-500">Geography</a>
						<a href="#" class="py-2 text-gray-500">Culture and Heritage</a>
						<a href="#" class="py-2 text-gray-500">Living in Agusan del Sur</a>
					</div>
				</div>	
				<div class="flex flex-col mr-20 relative nav-dropdown">
					<a href="#" class="py-6 border-t-2 border-gray-50 text-gray-400 font-bold text-sm flex items-center">ECONOMY
						<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 pl-2 text-gray-600 font-bold" fill="none" viewBox="0 0 24 24" stroke="currentColor">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
						</svg>
					</a>
					<div class="dropdown flex flex-col absolute left-0 top-full bg-white px-8 py-4 w-64">
						<a href="#" class="py-2 text-gray-500">The Economy</a>
						<a href="#" class="py-2 text-gray-500">Political Stability</a>
						<a href="#" class="py-2 text-gray-500">Human Resource</a>
						<a href="#" class="py-2 text-gray-500">Transportation, Communication and Utilities</a>
						<a href="#" class="py-2 text-gray-500">Finance and Administration</a>
						<a href="#" class="py-2 text-gray-500">Trade and Industry</a>
						<a href="#" class="py-2 text-gray-500">Tourism</a>
					</div>
				</div>		
				<div class="flex flex-col mr-20 relative nav-dropdown">
					<a href="#" class="py-6 border-t-2 border-gray-50 text-gray-400 font-bold text-sm">OPPORTUNITIES</a>
				</div>				
				<div class="flex flex-col mr-20 relative nav-dropdown">
					<a href="#" class="py-6 border-t-2 border-gray-50 text-gray-400 font-bold text-sm">TAX HOLIDAY</a>
				</div>	
				<div class="flex flex-col mr-20 relative nav-dropdown">
					<a href="#" class="py-6 border-t-2 border-gray-50 text-gray-400 font-bold text-sm">ECONOMIC FACTS</a>
				</div>	
			</div>
			<div class="hero min-h-80 w-screen bg-cover">

			</div>
		</section>

		<section class="explore py-24 px-60" style="background-color:#f4f4f4">
			<h1 class="text-center text-3xl mb-24">EXPERIENCE AGUSAN DEL SUR</h1>
			<div class="flex">
				<div class="flex flex1 mr-6">
					<div class="flex1 bg-gray-300 py-48 bg-cover rounded-l-md" style="background-image: url(img/marsh.png);"></div>
					<div class="flex1">
						<div class="p-10 flex flex-col bg-white rounded-tr-md">
							<h2 class="text-sm font-bold mb-1 text-gray-300">AGUSAN RIVER</h2>
							<h1 class="text-3xl font-bold mb-6 text-darkblue">Agusan Marsh</h1>
							<p class="text-sm text-gray-700 mb-6">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugit deleniti illo voluptatibus rem blanditiis natus.</p>
							<a href="#">
								<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-orange" viewBox="0 0 20 20" fill="currentColor">
									<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 1.414L10.586 9H7a1 1 0 100 2h3.586l-1.293 1.293a1 1 0 101.414 1.414l3-3a1 1 0 000-1.414z" clip-rule="evenodd" />
								</svg>
							</a>
						</div>
					</div>
				</div>
				<div class="flex flex1 mr-6">
					<div class="flex1 bg-gray-300 py-48 bg-cover rounded-l-md" style="background-image: url(img/toog.png);"></div>
					<div class="flex1">
						<div class="p-10 flex flex-col bg-white rounded-tr-md">
							<h2 class="text-sm font-bold mb-1 text-gray-300">SAN FRANCISCO</h2>
							<h1 class="text-3xl font-bold mb-6 text-darkblue">Giant Toog Tree</h1>
							<p class="text-sm text-gray-700 mb-6">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugit deleniti illo voluptatibus rem blanditiis natus.</p>
							<a href="#">
								<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-orange" viewBox="0 0 20 20" fill="currentColor">
									<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 1.414L10.586 9H7a1 1 0 100 2h3.586l-1.293 1.293a1 1 0 101.414 1.414l3-3a1 1 0 000-1.414z" clip-rule="evenodd" />
								</svg>
							</a>
						</div>
					</div>
				</div>
				<div class="flex flex1">
					<div class="flex1 bg-gray-300 py-48 bg-cover rounded-l-md" style="background-image: url(img/naliyagan.png);"></div>
					<div class="flex1">
						<div class="p-10 flex flex-col bg-white rounded-tr-md">
							<h2 class="text-sm font-bold mb-1 text-gray-300">AGUSAN DEL SUR</h2>
							<h1 class="text-3xl font-bold mb-6 text-darkblue">Naliyagan Festival</h1>
							<p class="text-sm text-gray-700 mb-6">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugit deleniti illo voluptatibus rem blanditiis natus.</p>
							<a href="#">
								<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-orange" viewBox="0 0 20 20" fill="currentColor">
									<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 1.414L10.586 9H7a1 1 0 100 2h3.586l-1.293 1.293a1 1 0 101.414 1.414l3-3a1 1 0 000-1.414z" clip-rule="evenodd" />
								</svg>
							</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="statistics flex flex-col py-24 px-60 bg-gray-100">
			<h1 class="text-center text-3xl mb-24">SOME STATISTICS</h1>
			<div class="flex flex-row">
				<div class="pane1 flex1 flex flex-col items-center mr-6">
					<svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mb-3 text-darkblue" fill="none" viewBox="0 0 24 24" stroke="currentColor">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
					</svg>
					<h2 class="text-6xl text-orange font-bold mb-3">385,000</h2>
					<h4 class="text-gray-400">Total population as of 2020</h4>
				</div>
				<div class="pane1 flex1 flex flex-col items-center mr-6">
					<svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mb-3 text-darkblue" fill="none" viewBox="0 0 24 24" stroke="currentColor">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
					</svg>
					<h2 class="text-6xl text-orange font-bold mb-3">855,356</h2>
					<h4 class="text-gray-400">Total land in area square kilometers</h4>
				</div>
				<div class="pane1 flex1 flex flex-col items-center mr-6">
					<svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mb-3 text-darkblue" viewBox="0 0 20 20" fill="currentColor">
						<path fill-rule="evenodd" d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z" clip-rule="evenodd" />
						<path d="M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.974 24.974 0 0110 15c-2.796 0-5.487-.46-8-1.308z" />
					</svg>
					<h2 class="text-6xl text-orange font-bold mb-3">272,355</h2>
					<h4 class="text-gray-400">Total number of employed citizens</h4>
				</div>
			</div>
		</section>
		<section class="economy flex flex-col min-h-screen py-60 px-60">
			<!-- <h1 class="text-center text-3xl mb-24">CULTURE AND HERITAGE</h1> -->
			<div class="flex flex-row">
				<div class="flex1 mr-4 flex items-center justify-center">
					<img src="img/heritage.png" alt="">
				</div>
				<div class="flex1 flex flex-col p-16">
					<h2 class="text-darkblue text-5xl font-bold mb-16">Our Culture and <br> Heritage</h2>
					<p class="mb-10">
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, repellendus dignissimos.
					</p>
					<p class="mb-10">
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus quas expedita nobis, ducimus perferendis aliquid accusantium. Soluta fugit aliquid eveniet repellat magni voluptate tenetur quisquam recusandae aut harum, laborum ducimus? Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed omnis esse pariatur qui ipsum magni eum culpa facilis, unde ducimus et itaque vero, dolore neque veniam sit laboriosam quia sapiente.
					</p>
					<a href="" class="text-white bg-orange px-16 py-2 rounded-full self-start">Read more</a>
				</div>
			</div>
		</section>
	</div>
</body>
</html>