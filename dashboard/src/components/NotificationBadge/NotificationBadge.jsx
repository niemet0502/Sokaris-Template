import React from 'react'
import "./NotificationBadge.css"

import NotificationsNoneIcon from '@material-ui/icons/NotificationsNone';

function NotificationBadge({Icon,color,background,count}) {
  return (
    <>
      <div className="NotificationBadge__Count">
        12
      </div>
      <div className="NotificationBadge">
        <Icon />
      </div>
    </>
  )
}

export default NotificationBadge
