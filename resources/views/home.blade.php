<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=2,shrink-to-fit=no,user-scalable=0,viewport-fit=cover">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Coding Test</title>
    <link rel="stylesheet" href="{{ asset('layout/css/libs/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('layout/css/main.min.css') }}">
  </head>
  <body class="bg-light">
      <div class="page">
        <main class="page-main">
          <div class="manage-budget">
            <div class="table-budget">
              <table class="w-100">
                <tbody>
                  <!-- start division-->
                  @foreach($divisions as $division)
                    <tr>
                      <td class="division show">
                        <div class="company">
                          <form>Division
                            <input type="text" value="{{ $division['division_name'] }}" readonly="">
                          </form>
                        </div>
                      </td>

                      @if($division['division_lead'])
                        <td class="department admin">
                          <div class="company">
                            <form>
                              <p>{{ $division['division_lead'] }}</p><span>&nbsp; Division Lead</span>
                            </form>
                          </div>
                        </td>
                      @endif

                      @if(!empty($division['division_employees']))
                        @foreach($division['division_employees'] as $div_employee)
                          <td class="department show ">
                            <div class="company">
                              <form>Division Employee
                                <input type="text" value="{{ $div_employee['division_employee'] }}" readonly>
                              </form>
                            </div>
                          </td>
                        @endforeach
                      @endif

                      <!-- start department-->
                      @if(!empty($division['division_departments']))
                        @foreach($division['division_departments'] as $department)
                          <td class="department show">
                            <div class="company">
                              <form>Department
                                <input type="text" value="{{ $department['department_name'] }}" readonly>
                              </form>
                            </div>
                          </td>

                          {{-- Start Department Employees --}}
                          @if(!empty($department['department_employees']))
                            @foreach($department['department_employees'] as $dep_employee)
                              <td class="department show">
                                <div class="company">
                                  <form>Department Employee
                                    <input type="text" value="{{ $dep_employee['department_employee'] }}" readonly>
                                  </form>
                                </div>
                              </td>
                            @endforeach
                          @endif
                          {{-- End Department Employees --}}

                          <!-- start teams-->
                          <td class="teams show">
                            @if($department['department_lead'])
                              <div class="team admin">
                                <div class="company">
                                  <form>
                                    <p>{{ $department['department_lead'] }}</p><span>&nbsp; Department Lead</span>
                                  </form>
                                </div>
                              </div>
                            @endif

                            @if(!empty($department['department_teams']))
                              @foreach($department['department_teams'] as $team)
                                <div class="team show">
                                  <div class="company">
                                    <form>Team
                                      <input type="text" value="{{ $team['team_name'] }}" readonly>
                                    </form>
                                  </div>
                                </div>
                                <div class="team show">
                                  <div class="company">
                                    <form>
                                      <p>{{ $team['team_lead'] }}</p><span>&nbsp; Team Lead</span>
                                    </form>
                                  </div>
                                </div>

                                @if(!empty($team['team_employees']))
                                  @foreach($team['team_employees'] as $team_employee)
                                    <div class="team show">
                                      <div class="company">
                                        <form>Team Employee
                                          <input type="text" value="{{ $team_employee['team_employee'] }}" readonly>
                                        </form>
                                      </div>
                                    </div>
                                  @endforeach
                                @endif
                                
                              @endforeach
                            @endif
                          </td>
                          <!-- end teams-->

                        @endforeach
                      @endif
                      {{-- End Departments --}}
                    </tr>
                  @endforeach
                  <!-- end division-->
                </tbody>
              </table>
            </div>
          </div>
        </main>
      </div>
  </body>
</html>
