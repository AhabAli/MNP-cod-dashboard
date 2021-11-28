<?php include('header.php') ?>
<div class="app-content content dashboard">
  <div class="content-wrapper">
    <div class="content-body">
      <!-- Basic form layout section start -->
      <section id="configuration">

        <div class="row mb-4">
          <div class="col-12 d-flex justify-content-between align-items-center flex-column flex-lg-row">
            <h2 class="helloHeading">Gull Ahmed <span>Textile</span><span>.</span></h2>
            <div class="dashboard search-bar">
              <form action="">
                <div class="row align-items-center">
                  <div class="col-12">
                    <input type="search" placeholder="Search" class="form-control">
                    <button type="submit" class="search-btn"><img src="images/magnify.png" class="img-fluid" alt=""></button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>

        <div class="row mb-4 cards-row">
          <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
            <div class="card-mnp">
              <div class="mnp-media">
                <img src="images/shopping-cart-box.png" alt="">
                <div class="mnp-media-body">
                  <h3>3,000</h3>
                  <div class="d-flex align-items-center justify-content-between">
                    <p class="mnp-text">Booked Shippments</p>
                    <a class="mnp-badge">Details</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
            <div class="card-mnp">
              <div class="mnp-media">
                <img src="images/truck-box.png" alt="">
                <div class="mnp-media-body">
                  <h3>3,000</h3>
                  <div class="d-flex align-items-center justify-content-between">
                    <p class="mnp-text">Delivered Shippments</p>
                    <a class="mnp-badge">Details</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
            <div class="card-mnp">
              <div class="mnp-media">
                <img src="images/return-box.png" alt="">
                <div class="mnp-media-body">
                  <h3>3,000</h3>
                  <div class="d-flex align-items-center justify-content-between">
                    <p class="mnp-text">Returned Shippments</p>
                    <a class="mnp-badge">Details</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
            <div class="card-mnp">
              <div class="mnp-media">
                <img src="images/inProcess-box.png" alt="">
                <div class="mnp-media-body">
                  <h3>3,000</h3>
                  <div class="d-flex align-items-center justify-content-between">
                    <p class="mnp-text">In Process Shippments</p>
                    <a class="mnp-badge">Details</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row mb-4">
          <div class="col-lg-6 col-md-12 col-12">
            <div class="card-mnp extra-padding mb-xl-0 mb-3 h-100 d-flex flex-column">
              <div class="d-flex justify-content-between align-items-center flex-column flex-md-row mb-2">
                <h2 class="helloHeading">COD <span>Amount</span></h2>
                <div class="dropdown">
                  <button class="user-dropdown" type="button" id="filter_1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="images/filter.png" alt="filter">
                  </button>
                  <div class="dropdown-menu user-menu" aria-labelledby="filter_1">
                    <a class="dropdown-item" href="#">Accounts</a>
                    <a class="dropdown-item" href="#">Location</a>
                    <a class="dropdown-item" href="#">Date Range</a>
                  </div>
                </div>
              </div>
              <div class="row no-gutters my-auto">
                <div class="col-md-12 col-12 text-center">
                  <ul class="cod-circles">
                    <li>
                      <div class="c100 p49 big light-bloo">
                        <span class="circle-content-holder">
                          <span class="count-orders">3.2M</span>
                          <span class="percentage-success">49%</span>
                        </span>
                        <div class="slice">
                          <div class="bar"></div>
                          <div class="fill"></div>
                        </div>
                      </div>
                      <p>Delivered</p>
                    </li>
                    <li>
                      <div class="c100 p16 big light-bloo">
                        <span class="circle-content-holder">
                          <span class="count-orders">0.9k</span>
                          <span class="percentage-success">16%</span>
                        </span>
                        <div class="slice">
                          <div class="bar"></div>
                          <div class="fill"></div>
                        </div>
                      </div>
                      <p>Returned</p>
                    </li>
                    <li>
                      <div class="c100 p25 big light-bloo">
                        <span class="circle-content-holder">
                          <span class="count-orders">3M</span>
                          <span class="percentage-success">25%</span>
                        </span>
                        <div class="slice">
                          <div class="bar"></div>
                          <div class="fill"></div>
                        </div>
                      </div>
                      <p>In Process</p>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-12 col-12">
            <div class="card-mnp extra-padding mb-xl-0 mb-3 h-100 d-flex flex-column">
              <div class="d-flex justify-content-between align-items-center flex-column flex-md-row mb-2">
                <h2 class="helloHeading">Return <span>Trends</span></h2>
                <div class="dropdown">
                  <button class="user-dropdown" type="button" id="filter_1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="images/filter.png" alt="filter">
                  </button>
                  <div class="dropdown-menu user-menu" aria-labelledby="filter_1">
                    <a class="dropdown-item" href="#">Accounts</a>
                    <a class="dropdown-item" href="#">Location</a>
                    <a class="dropdown-item" href="#">Date Range</a>
                  </div>
                </div>
              </div>
              <canvas id="myChart" class="my-auto" height="300"></canvas>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-xl-9 col-lg-8">
            <div class="card-mnp extra-padding">
              <div class="d-flex justify-content-between align-items-center flex-column flex-lg-row mb-2">
                <h2 class="helloHeading">Shipper <span>Advice</span></h2>
                <div class="dashboard search-bar">
                  <form action="">
                    <div class="row align-items-center">
                      <div class="col-12">
                        <input type="search" placeholder="Search" class="form-control">
                        <button type="submit" class="search-btn"><img src="images/magnify.png" class="img-fluid" alt=""></button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <div class="row no-gutters">
                <div class="col-12">
                  <div class="mnp-table">
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>
                              Ref.No
                            </th>
                            <th>
                              Consignment No.
                            </th>
                            <th>
                              Reason
                            </th>
                            <th>
                              Remarks
                            </th>
                            <th>
                              KPI
                            </th>
                            <th>
                              Action
                            </th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                              1177094
                            </td>
                            <td>
                              545975110205671
                            </td>
                            <td>
                              Refused to Received
                            </td>
                            <td>
                              Order Cancelled
                            </td>
                            <td>
                              25:00
                            </td>
                            <td>
                              <button type="button" class="tablebutton">
                                <img src="images/pencil.png" alt="">
                              </button>
                              <div class="dropdown">
                                <button class="table-dd dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  <img src="images/table-elipses.png" class="table-elipses" alt="">
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                  <a class="dropdown-item" href="view-order.php">View</a>
                                </div>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              1177094
                            </td>
                            <td>
                              545975110205671
                            </td>
                            <td>
                              Refused to Received
                            </td>
                            <td>
                              Order Cancelled
                            </td>
                            <td>
                              25:00
                            </td>
                            <td>
                              <button type="button" class="tablebutton">
                                <img src="images/pencil.png" alt="">
                              </button>
                              <div class="dropdown">
                                <button class="table-dd dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  <img src="images/table-elipses.png" class="table-elipses" alt="">
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                  <a class="dropdown-item" href="view-order.php">View</a>
                                </div>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              1177094
                            </td>
                            <td>
                              545975110205671
                            </td>
                            <td>
                              Refused to Received
                            </td>
                            <td>
                              Order Cancelled
                            </td>
                            <td>
                              25:00
                            </td>
                            <td>
                              <button type="button" class="tablebutton">
                                <img src="images/pencil.png" alt="">
                              </button>
                              <div class="dropdown">
                                <button class="table-dd dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  <img src="images/table-elipses.png" class="table-elipses" alt="">
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                  <a class="dropdown-item" href="view-order.php">View</a>
                                </div>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              1177094
                            </td>
                            <td>
                              545975110205671
                            </td>
                            <td>
                              Refused to Received
                            </td>
                            <td>
                              Order Cancelled
                            </td>
                            <td>
                              25:00
                            </td>
                            <td>
                              <button type="button" class="tablebutton">
                                <img src="images/pencil.png" alt="">
                              </button>
                              <div class="dropdown">
                                <button class="table-dd dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  <img src="images/table-elipses.png" class="table-elipses" alt="">
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                  <a class="dropdown-item" href="view-order.php">View</a>
                                </div>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              1177094
                            </td>
                            <td>
                              545975110205671
                            </td>
                            <td>
                              Refused to Received
                            </td>
                            <td>
                              Order Cancelled
                            </td>
                            <td>
                              25:00
                            </td>
                            <td>
                              <button type="button" class="tablebutton">
                                <img src="images/pencil.png" alt="">
                              </button>
                              <div class="dropdown">
                                <button class="table-dd dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  <img src="images/table-elipses.png" class="table-elipses" alt="">
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                  <a class="dropdown-item" href="view-order.php">View</a>
                                </div>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              1177094
                            </td>
                            <td>
                              545975110205671
                            </td>
                            <td>
                              Refused to Received
                            </td>
                            <td>
                              Order Cancelled
                            </td>
                            <td>
                              25:00
                            </td>
                            <td>
                              <button type="button" class="tablebutton">
                                <img src="images/pencil.png" alt="">
                              </button>
                              <div class="dropdown">
                                <button class="table-dd dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  <img src="images/table-elipses.png" class="table-elipses" alt="">
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                  <a class="dropdown-item" href="view-order.php">View</a>
                                </div>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              1177094
                            </td>
                            <td>
                              545975110205671
                            </td>
                            <td>
                              Refused to Received
                            </td>
                            <td>
                              Order Cancelled
                            </td>
                            <td>
                              25:00
                            </td>
                            <td>
                              <button type="button" class="tablebutton">
                                <img src="images/pencil.png" alt="">
                              </button>
                              <div class="dropdown">
                                <button class="table-dd dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  <img src="images/table-elipses.png" class="table-elipses" alt="">
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                  <a class="dropdown-item" href="view-order.php">View</a>
                                </div>
                              </div>
                            </td>
                          </tr>

                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="col-12 text-right">
                  <a href="javascript:void(0)" class="mnp-badge">View All</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-4">
            <div class="card-mnp extra-padding h-100">
              <div class="d-flex justify-content-around align-items-start mb-4">
                <img src="images/bell.png" class="img-fluid" alt="">
                <span class="bg-orange br-100 badge">05</span>
              </div>
              <div class="notif-card-body">
                <h3 class="heading-3 mb-2">Notification!</h3>
                <p class="mnp-text ln-2">Dear Customer,
                  this is to inform you that reason of
                  Return Shipments (RTS) updated on
                  daily basis. Please contact us
                  immediately in case ofd any
                  query. </p>
                <p class="mnp-text mt-2 mb-3 d-flex align-items-center">
                  <svg class="mr-1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="27" height="26" viewBox="0 0 27 26">
                    <defs>
                      <style>
                      </style>
                    </defs>
                    <image id="calendar" class="cls-1" width="27" height="26" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABsAAAAaCAYAAABGiCfwAAADY0lEQVRIibWW24vWVRSGn2/msxntZJ7KPKCNmAnZ+UBXQZEhaRKaJl7U35VXgkoq0dEkKsMLu6iUUAlSy8MoOkNaMzqfHZwvXnh2bH58Ixm4YJiZvfbea613vevdv1a326VhfcAa4H5gHPgQ+MMt8b0KzAeuAh9UvhawGlgAXPNcp766rxkJmAssBHYAdwBLKt+9wCJ904CHKt9MYCmw08BLmhe3/T0beNj/8/cV4DowAjwJzKsuHNM3CjwBzNF3n0h09D2uL9CdBobblr3ehb+AATcUSwXTzXagkex/8QW9tcDBBHsWOAIcclP68Zqbku23wI/6ZgFvVL7vgOMVOhv0BYHvK98Q8EJb6H6vMhoVxneAP624WCC8rC8o/Fz5cuaSvr8b5yaAyXYDMty410x/7eF7fwrfpOycbULdho8SbI69K5a1G8CD9opb9M1v+OaWYIm6UkrfLhsMgxOsP0ypmnk77AHgpTJn9XCHrndKgEKcfhkWmH4rPZCR/c5XUZK7HYPrqsy/97cbVcwAtsrCBPzaitcbLIfOAfuBZ/yZMIntDv+bBr8LeE92t5oV4QaUnJ+ULdTJj4HPbT72OPO5yyT7JMIVz49X6kKvysaFb5NwHnR9WHFuWVnsF+BpYJnzF2gvishmz4/cLFjHOZrn38OuB7bFXnjGtSPOU8T6glCmqk/s2ajJTxksWW000/ToG+AosM5L+xXsz4DngFWSaEAIl0oM3D9i3yMG03oFa1ndiw71USvdLTQvuzcicBg4BrwNnFVBLutPsk/p+zT3NIONSeGtZvuV69G5103kpGtnnJ/lJnSocVdG5EvhfAV4txksEOyTcaH0KdcP+FBOVmtR9Ud975qBii0wuRWpshf1N3rJah9AnLMw73nXiy26ifIMOXODJjbUDDZDIY3qn3C+UCn2CWs9O/cI16AVFlsmqfbYw04hSKt6Dsb8WNkiUw+4fsoHtWUSxTpVgqtM6rR791ajk2Ru5Otqg4/g4eqSvkr/irV6vH2POQq7/Qx4S+budPaKJfhYsv/BPgxUYtr18vpNKsFr6E/axzAy8hbpSt8z3MUieSHXtgQLLLk8jOn1aTeV5UyCfSQREiSJl0ARgEfytDhnE70+Uv+PRT0ySwmQ75CgEHLl/y+A8wD/AEdZ5vt5+t1kAAAAAElFTkSuQmCC" />
                  </svg>

                  2021-08-04 06:24:19
                </p>
                <a href="javascript:void(0)" class="mnp-badge">Read More</a>

              </div>
            </div>
          </div>
        </div>

      </section>
    </div>
  </div>
</div>

<!-- ////////////////////////////////////////////////////////////////////////////-->

<?php include('footer.php') ?>
<script>
  let delayed;
  const ctx = document.getElementById('myChart').getContext('2d');
  const myChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: ['Jan-21', 'Feb-21', 'Mar-21', 'Apr-21', 'May-21', 'Jun-21'],
      datasets: [{
        label: 'Returns',
        data: [7, 12, 6, 5, 2, 3],
        borderWidth: 2,
        borderColor: "#868589",
        backgroundColor: "#f46711",
        pointBorderColor: "#fff",
        pointRadius: 5,
      }]
    },
    options: {
      animation: {
        onComplete: () => {
          delayed = true;
        },
        delay: (context) => {
          let delay = 0;
          if (context.type === 'data' && context.mode === 'default' && !delayed) {
            delay = context.dataIndex * 300 + context.datasetIndex * 100;
          }
          return delay;
        },
      },
      scales: {
        y: {
          beginAtZero: true
        }
      },
      plugins: {
        legend: {
          position: 'top',
          display: false
        },
      },
      tension: 0.3,
      responsive: true,
      hoverRadius: 12,
      hitRadius: 30,
    }
  });
</script>