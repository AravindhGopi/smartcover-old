<style>

    
.help-block {
      color: #a94442;
      font-size: 14px;
      width: 100%;
    }

    .dollar-symbol {
      margin-top: 7px;
      margin-right: 4px;
    }

    .loading {
      position: fixed;
      z-index: 999;
      height: 2em;
      width: 2em;
      overflow: show;
      margin: auto;
      top: 0;
      left: 0;
      bottom: 0;
      right: 0;
    }

    /* Transparent Overlay */
    .loading:before {
      content: '';
      display: block;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.3);
    }

    /* :not(:required) hides these rules from IE9 and below */
    .loading:not(:required) {
      /* hide "loading..." text */
      font: 0/0 a;
      color: transparent;
      text-shadow: none;
      background-color: transparent;
      border: 0;
    }

    .loading:not(:required):after {
      content: '';
      display: block;
      font-size: 10px;
      width: 1em;
      height: 1em;
      margin-top: -0.5em;
      -webkit-animation: spinner 1500ms infinite linear;
      -moz-animation: spinner 1500ms infinite linear;
      -ms-animation: spinner 1500ms infinite linear;
      -o-animation: spinner 1500ms infinite linear;
      animation: spinner 1500ms infinite linear;
      border-radius: 0.5em;
      -webkit-box-shadow: rgba(0, 0, 0, 0.75) 1.5em 0 0 0, rgba(0, 0, 0, 0.75) 1.1em 1.1em 0 0, rgba(0, 0, 0, 0.75) 0 1.5em 0 0, rgba(0, 0, 0, 0.75) -1.1em 1.1em 0 0, rgba(0, 0, 0, 0.5) -1.5em 0 0 0, rgba(0, 0, 0, 0.5) -1.1em -1.1em 0 0, rgba(0, 0, 0, 0.75) 0 -1.5em 0 0, rgba(0, 0, 0, 0.75) 1.1em -1.1em 0 0;
      box-shadow: rgba(0, 0, 0, 0.75) 1.5em 0 0 0, rgba(0, 0, 0, 0.75) 1.1em 1.1em 0 0, rgba(0, 0, 0, 0.75) 0 1.5em 0 0, rgba(0, 0, 0, 0.75) -1.1em 1.1em 0 0, rgba(0, 0, 0, 0.75) -1.5em 0 0 0, rgba(0, 0, 0, 0.75) -1.1em -1.1em 0 0, rgba(0, 0, 0, 0.75) 0 -1.5em 0 0, rgba(0, 0, 0, 0.75) 1.1em -1.1em 0 0;
    }

    /* Animation */
    @-webkit-keyframes spinner {
      0% {
        -webkit-transform: rotate(0deg);
        -moz-transform: rotate(0deg);
        -ms-transform: rotate(0deg);
        -o-transform: rotate(0deg);
        transform: rotate(0deg);
      }

      100% {
        -webkit-transform: rotate(360deg);
        -moz-transform: rotate(360deg);
        -ms-transform: rotate(360deg);
        -o-transform: rotate(360deg);
        transform: rotate(360deg);
      }
    }

    @-moz-keyframes spinner {
      0% {
        -webkit-transform: rotate(0deg);
        -moz-transform: rotate(0deg);
        -ms-transform: rotate(0deg);
        -o-transform: rotate(0deg);
        transform: rotate(0deg);
      }

      100% {
        -webkit-transform: rotate(360deg);
        -moz-transform: rotate(360deg);
        -ms-transform: rotate(360deg);
        -o-transform: rotate(360deg);
        transform: rotate(360deg);
      }
    }

    @-o-keyframes spinner {
      0% {
        -webkit-transform: rotate(0deg);
        -moz-transform: rotate(0deg);
        -ms-transform: rotate(0deg);
        -o-transform: rotate(0deg);
        transform: rotate(0deg);
      }

      100% {
        -webkit-transform: rotate(360deg);
        -moz-transform: rotate(360deg);
        -ms-transform: rotate(360deg);
        -o-transform: rotate(360deg);
        transform: rotate(360deg);
      }
    }

    @keyframes spinner {
      0% {
        -webkit-transform: rotate(0deg);
        -moz-transform: rotate(0deg);
        -ms-transform: rotate(0deg);
        -o-transform: rotate(0deg);
        transform: rotate(0deg);
      }

      100% {
        -webkit-transform: rotate(360deg);
        -moz-transform: rotate(360deg);
        -ms-transform: rotate(360deg);
        -o-transform: rotate(360deg);
        transform: rotate(360deg);
      }
    }
    /* .rangeslider-wrap {
      padding-top: 100px;
    }

    .rangeslider {
      position: relative;
      height: $sliderHeight;
      border-radius: $roundness;
      width: 100%;
      background-color: $secondary;

      &__handle {
        transition: background-color .2s;
        box-sizing: border-box;
        width: $handleSize;
        height: $handleSize;
        border-radius: 100%;
        background-color: $primary;
        touch-action: pan-y;
        cursor: pointer;
        display: inline-block;
        position: absolute;
        z-index: 3;
        top: -($handleSize/2) + ($sliderHeight/2);
        box-shadow: 0 1px 3px rgba(black, .5),
          inset 0 0 0 2px white;

        &__value {
          transition: background-color .2s,
            box-shadow .1s,
            transform .1s;
          box-sizing: border-box;
          width: $valueWidth;
          text-align: center;
          padding: 10px;
          background-color: $primary;
          border-radius: $roundness;
          color: white;
          left: -($valueWidth/2 - $handleSize/2);
          top: -55px;
          position: absolute;
          white-space: nowrap;
          border-top: 1px solid darken($primary, 10%);
          box-shadow: 0 -4px 1px rgba(black, .07),
            0 -5px 20px rgba(black, .3);

          &:before {
            transition: border-top-color .2s;
            position: absolute;
            bottom: -10px;
            left: calc(50% - 10px);
            content: "";
            width: 0;
            height: 0;
            border-left: 10px solid transparent;
            border-right: 10px solid transparent;
            border-top: 10px solid;
            border-top-color: $primary;
          }

          &:after {
            content: " cm";
          }
        }
      }

      &__fill {
        position: absolute;
        top: 0;
        z-index: 1;
        height: 100%;
        background-color: $primary;
        border-radius: $roundness;
      }

      &__labels {
        position: absolute;
        width: 100%;
        z-index: 2;
        display: flex;
        justify-content: space-between;

        &__label {
          font-size: 0.75em;
          position: relative;
          padding-top: 15px;
          color: $secondary;

          &:before {
            position: absolute;
            top: 0;
            left: 50%;
            transform: translateX(-50%);
            content: "";
            width: 1px;
            height: $labelMarkerHeight - 3px;
            border-radius: 1px;
            background-color: rgba($secondary, .5);
          }

          &:first-child:before,
          &:last-child:before {
            height: $labelMarkerHeight;
            width: 2px;
          }

          &:first-child:before {
            background-color: $primary
          }

          &:last-child:before {
            background-color: $secondary
          }

          &:first-child {
            transform: translateX(-48%)
          }

          &:last-child {
            transform: translateX(48%)
          }
        }
      }

      // active state
      &.rangeslider--active {
        .rangeslider__handle {

          &,
          * {
            background-color: lighten($primary, 10%)
          }

          *:before {
            border-top-color: lighten($primary, 10%)
          }
        }

        .rangeslider__handle__value {
          transform: translateY(-5px);
          box-shadow: 0 -3px 2px rgba(black, .04),
            0 -9px 25px rgba(black, .15);
        }
      }
    } */
  </style>