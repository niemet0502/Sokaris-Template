import React from 'react'
import "./NotificationBadge.css"

function NotificationBadge({Icon,color,background,count}) {
  return (
    <div className="NotificationBadge__container">
      <div className="NotificationBadge__Count" style={{backgroundColor: `${background}`}}>
        {count}
      </div>
      <div className="NotificationBadge" style={{backgroundColor: `${color}`}}>
        <Icon style={{color: `${background}`}} />
      </div>
    </div>
  )
}

export default NotificationBadge
