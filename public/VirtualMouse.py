import cv2
import cvzone
import numpy as np
from cvzone.HandTrackingModule import HandDetector
from pynput.mouse import Controller
import time
import autopy
# access the camera

cap = cv2.VideoCapture(0);
# setup the height and width of the cam
cap.set(3, 640)  # width of webcam
cap.set(4, 480)  # height of webcam

wScr, hScr = autopy.screen.size()
print(wScr, hScr)

detector = HandDetector(detectionCon=0.8)
pTime = 0

while True:
    # 1. Find Hand Landmarks
    success, img = cap.read()
    img = detector.findHands(img)
    lmList, bboxInfo = detector.findPosition(img)
    # 2. Get the tip of the index and middle fingers
    if len(lmList) != 0:

        x1, y1 = lmList[8]
        x2, y2 = lmList[12]

    # 3. Check Which fingers are up
        fingers = detector.fingersUp()

    # 4. Only Index Finger : Moving Mode
        if fingers[1]== 1 and fingers[2] == 0:
            # 5. Convert Coordinates
            x3 = np.interp(x1, (0, 640), (0, wScr))
            y3 = np.interp(y1, (0, 480), (0, hScr))

    # 6. Smoothen Values
            # 7. Move Mouse
            autopy.mouse.move(wScr-x3, y3)

    # 8. Both Index and middle fingers are up : Clicking Mode
    # 9. Find Distance between fingers
    # 10. Click Mouse
    # 11. Frame Rate
    cTime = time.time()
    fps = 1 / (cTime - pTime)
    pTime = cTime
    cv2.putText(img, str(int(fps)), (20, 70), cv2.FONT_HERSHEY_SIMPLEX, 3, (255, 0, 0), 3)

    cv2.imshow("Web cam", img)
    cv2.waitKey(1)
