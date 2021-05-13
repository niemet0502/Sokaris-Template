import NotificationBadge from "./components/NotificationBadge/NotificationBadge"

import NotificationsNoneIcon from '@material-ui/icons/NotificationsNone';

import RedeemIcon from '@material-ui/icons/Redeem';

function App() {
  return (
    <div className="App" style={{paddingTop: '50px', paddingLeft: '50px'}}>
      <NotificationBadge
        Icon={NotificationsNoneIcon}
      />

      <NotificationBadge
        Icon={RedeemIcon}
      />
    </div>
  );
}

export default App;
