      
// add SiteMode
function fnAddSiteMode() 
    {
        if (window.external.msIsSiteMode())
            {
             //alert('In Site mode'); 
             hidealert();
            }
    else 
    { 
    //alert('Added');
    window.external.msAddSiteMode();
    hidealert();
    
     }
    
    
   }


// add dynamic jumplists 
function fnCreateJumpList(iScenario) {
    fnClearJumpList();
    switch (iScenario) {
    // change values in the parameters
        case 1:
            window.external.msSiteModeCreateJumpList("Recent")
            window.external.msSiteModeAddJumpListItem("BBC2 - Good Will Hunting", "http://www.bbc.co.uk/iplayer/episode/b0078942/Good_Will_Hunting/", "http://localhost:8082/img/favicon.ico");
            window.external.msSiteModeAddJumpListItem("BBC1 - BBC Weekend News - 15/08/2010", "http://www.bbc.co.uk/iplayer/episode/b00tghyt/BBC_Weekend_News_15_08_2010/", "http://localhost:8082/img/favicon.ico");
            window.external.msSiteModeAddJumpListItem("CBeebies - Big Barn Farm - 40 Winks", "http://www.bbc.co.uk/iplayer/episode/b009kqc5/Big_Barn_Farm_Series_1_40_Winks/", "http://localhost:8082/img/favicon.ico");
            window.external.msSiteModeAddJumpListItem("BBC3 - Dr Who Confidential - Series 5", "http://www.bbc.co.uk/iplayer/episode/b00sbjzl/Doctor_Who_Confidential_Series_5_Blinded_by_the_Light/", "http://localhost:8082/img/favicon.ico");

            window.external.msSiteModeAddJumpListItem("BBC Parliament - Budget 2010", "http://www.bbc.co.uk/iplayer/episode/b00swny8/Budget_2010/", "http://localhost:8082/img/favicon.ico");
            window.external.msSiteModeAddJumpListItem("BBC1 - Casualty - Series 24", "http://www.bbc.co.uk/iplayer/episode/b00th1md/Casualty_Series_24_What_Tonight_Means_to_Me_Part_1/", "http://localhost:8082/img/favicon.ico");
            window.external.msSiteModeAddJumpListItem("BBC4 - Britain By Bike - West Yorkshire", "http://www.bbc.co.uk/iplayer/episode/b00td4sg/Britain_by_Bike_West_Yorkshire/", "http://localhost:8082/img/favicon.ico");
            
            break;
        case 2:
            window.external.msSiteModeCreateJumpList("New additions")
            window.external.msSiteModeAddJumpListItem("CBeebies - Driver Dan's Story Train - Shush", "http://www.bbc.co.uk/iplayer/episode/b00r4xfj/Driver_Dans_Story_Train_Shush/", "http://localhost:8082/img/favicon.ico");
            window.external.msSiteModeAddJumpListItem("BBC News Channel - Our World - Iraq - MilitiaMen", "http://www.bbc.co.uk/iplayer/episode/b00tj3h1/Our_World_Iraq_Militiamen/", "http://localhost:8082/img/favicon.ico");
            break;

    }
    
    window.external.msSiteModeShowJumpList();

}

// Clear JumpList
function fnClearJumpList() {
    window.external.msSiteModeClearJumplist();
}

// Add ThumbnailOverlay
function fnAddThumbNailOverlay(iState){

    fnClearThumbNailOverlay();
    // Change this as needed.
        switch(iState)
        {
            
            case 1:
                window.external.msSiteModeSetIconOverlay("progressError.ico", "Fail");
                break;

            case 2:
                window.external.msSiteModeSetIconOverlay("progressSkip.ico", "Pass");
                break;

        }

}

function fnClearThumbNailOverlay() {
    window.external.msSiteModeClearIconOverlay();
}

function hidealert() {
    alertWrapper.style.visibility = 'hidden';
}
     
