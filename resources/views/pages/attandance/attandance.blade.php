@extends('layout.app',['name'=>$user['user_name']])
@section('main_section')
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">My Attendance</h4>
                    <canvas id="transaction-history" class="transaction-chart"></canvas>
                    <div class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
                      <div class="text-md-center text-xl-left">
                        <h6 class="mb-1">Total Hour Attendance</h6>
                        <p class="text-muted mb-0"> from 07 Jan 2019</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-8 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex flex-row justify-content-between">
                      <h4 class="card-title mb-1">Subject Wise Attandance</h4>
                      <p class="text-muted mb-1">Your current status</p>
                    </div>
                    <div class="row">
                      <div class="col-12">
                        <div class="preview-list">
                          <div class="preview-item border-bottom">
                            <div class="preview-thumbnail">
                              <div class="preview-icon bg-primary">
                                <i class="mdi mdi-file-document"></i>
                              </div>
                            </div>
                            <div class="preview-item-content d-sm-flex flex-grow">
                              <div class="flex-grow">
                                <h6 class="preview-subject">Formal Languages And Automata Theory</h6>
                                <p class="text-muted mb-0">DEEPA AB</p>
                              </div>
                              <div class="me-auto text-sm-right pt-2 pt-sm-0">
                                <p class="text-muted mb-0">82.5%</p>
                                <p class="text-muted">updated:35 minutes ago</p>
                              </div>
                            </div>
                          </div>
                          <div class="preview-item border-bottom">
                            <div class="preview-thumbnail">
                              <div class="preview-icon bg-success">
                                <i class="mdi mdi-cloud-download"></i>
                              </div>
                            </div>
                            <div class="preview-item-content d-sm-flex flex-grow">
                              <div class="flex-grow">
                                <h6 class="preview-subject">Computer Networks</h6>
                                <p class="text-muted mb-0">SHYMA A</p>
                              </div>
                              <div class="me-auto text-sm-right pt-2 pt-sm-0">
                                <p class="text-muted mb-0">82.5%</p>
                                <p class="text-muted">updated:35 minutes ago</p>
                              </div>
                            </div>
                          </div>
                          <div class="preview-item border-bottom">
                            <div class="preview-thumbnail">
                              <div class="preview-icon bg-info">
                                <i class="mdi mdi-clock"></i>
                              </div>
                            </div>
                            <div class="preview-item-content d-sm-flex flex-grow">
                              <div class="flex-grow">
                                <h6 class="preview-subject">System Software</h6>
                                <p class="text-muted mb-0">SURYANATH RS</p>
                              </div>
                              <div class="me-auto text-sm-right pt-2 pt-sm-0">
                                <p class="text-muted mb-0">82.5%</p>
                                <p class="text-muted">updated:35 minutes ago</p>
                              </div>
                            </div>
                          </div>
                          <div class="preview-item border-bottom">
                            <div class="preview-thumbnail">
                              <div class="preview-icon bg-info">
                                <i class="mdi mdi-clock"></i>
                              </div>
                            </div>
                            <div class="preview-item-content d-sm-flex flex-grow">
                              <div class="flex-grow">
                                <h6 class="preview-subject">Micro Processor And Micro Controller</h6>
                                <p class="text-muted mb-0">SOUMYA S</p>
                              </div>
                              <div class="me-auto text-sm-right pt-2 pt-sm-0">
                                <p class="text-muted mb-0">82.5%</p>
                                <p class="text-muted">updated:35 minutes ago</p>
                              </div>
                            </div>
                          </div>
                          <div class="preview-item border-bottom">
                            <div class="preview-thumbnail">
                              <div class="preview-icon bg-danger">
                                <i class="mdi mdi-email-open"></i>
                              </div>
                            </div>
                            <div class="preview-item-content d-sm-flex flex-grow">
                              <div class="flex-grow">
                                <h6 class="preview-subject">Management Of Software System</h6>
                                <p class="text-muted mb-0">AGGIE VARGHESE</p>
                              </div>
                              <div class="me-auto text-sm-right pt-2 pt-sm-0">
                                <p class="text-muted mb-0">82.5%</p>
                                <p class="text-muted">updated:35 minutes ago</p>
                              </div>
                            </div>
                          </div>
                          <div class="preview-item">
                            <div class="preview-thumbnail">
                              <div class="preview-icon bg-warning">
                                <i class="mdi mdi-chart-pie"></i>
                              </div>
                            </div>
                            <div class="preview-item-content d-sm-flex flex-grow">
                              <div class="flex-grow">
                                <h6 class="preview-subject">Disaster Manageement</h6>
                                <p class="text-muted mb-0">REMYA KRISHNAN R</p>
                              </div>
                              <div class="me-auto text-sm-right pt-2 pt-sm-0">
                                <p class="text-muted mb-0">82.5%</p>
                                <p class="text-muted">updated:35 minutes ago</p>
                              </div>
                            </div>
                          </div>
                          <div class="preview-item border-bottom">
                            <div class="preview-thumbnail">
                              <div class="preview-icon bg-info">
                                <i class="mdi mdi-clock"></i>
                              </div>
                            </div>
                            <div class="preview-item-content d-sm-flex flex-grow">
                              <div class="flex-grow">
                                <h6 class="preview-subject">System Software And Microcontroller Labs</h6>
                                <p class="text-muted mb-0">KRISHNAPRIYA V/SOUMYA S</p>
                              </div>
                              <div class="me-auto text-sm-right pt-2 pt-sm-0">
                                <p class="text-muted mb-0">82.5%</p>
                                <p class="text-muted">updated:35 minutes ago</p>
                              </div>
                            </div>
                          </div>
                          <div class="preview-item border-bottom">
                            <div class="preview-thumbnail">
                              <div class="preview-icon bg-info">
                                <i class="mdi mdi-clock"></i>
                              </div>
                            </div>
                            <div class="preview-item-content d-sm-flex flex-grow">
                              <div class="flex-grow">
                                <h6 class="preview-subject">Database Management System Lab</h6>
                                <p class="text-muted mb-0">SHYMA A/ANSU MARIAM VARKEY</p>
                              </div>
                              <div class="me-auto text-sm-right pt-2 pt-sm-0">
                                <p class="text-muted mb-0">82.5%</p>
                                <p class="text-muted">updated:35 minutes ago</p>
                              </div>
                            </div>
                          </div>
                          <div class="preview-item border-bottom">
                            <div class="preview-thumbnail">
                              <div class="preview-icon bg-info">
                                <i class="mdi mdi-clock"></i>
                              </div>
                            </div>
                            <div class="preview-item-content d-sm-flex flex-grow">
                              <div class="flex-grow">
                                <h6 class="preview-subject">Embedded System Design</h6>
                                <p class="text-muted mb-0">SOUMYA S</p>
                              </div>
                              <div class="me-auto text-sm-right pt-2 pt-sm-0">
                                <p class="text-muted mb-0">82.5%</p>
                                <p class="text-muted">updated:35 minutes ago</p>
                              </div>
                            </div>
                          </div>
                          <div class="preview-item border-bottom">
                            <div class="preview-thumbnail">
                              <div class="preview-icon bg-info">
                                <i class="mdi mdi-clock"></i>
                              </div>
                            </div>
                            <div class="preview-item-content d-sm-flex flex-grow">
                              <div class="flex-grow">
                                <h6 class="preview-subject">Neural Networks And Deep Learning</h6>
                                <p class="text-muted mb-0">GAYATHRI MOHAN</p>
                              </div>
                              <div class="me-auto text-sm-right pt-2 pt-sm-0">
                                <p class="text-muted mb-0">82.5%</p>
                                <p class="text-muted">updated:35 minutes ago</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
@endsection