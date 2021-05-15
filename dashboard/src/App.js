import NotificationBadge from "./components/NotificationBadge/NotificationBadge"
import "./App.css"
import NotificationsNoneIcon from '@material-ui/icons/NotificationsNone';
import RedeemIcon from '@material-ui/icons/Redeem';

import Topbar from "./components/Topbar/Topbar"

function App() {
  return (
    <div className="App" style={{paddingTop: '50px', paddingLeft: '50px'}}>

      <h3>Notification Badge</h3>
      <NotificationBadge
        Icon={NotificationsNoneIcon}
        background="#FF5B5B"
        color="rgb(255, 91, 91,0.15)"
        count="12"
      />

      <NotificationBadge
        Icon={RedeemIcon}
        background="#5E6C93"
        color="rgb(94, 108, 147, 0.15)"
        count="5"
      />

      <h3>TopBar</h3>
      <Topbar/>
    </div>
  );
}

export default App;
