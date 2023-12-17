!(function () {
  "use strict";
  var e,
    t = {
      537: function (e, t, i) {
        var r,
          n,
          s,
          o = i(599),
          a = i(935);
        class l extends o.Qr {
          open() {
            (0, a.IO)(this.panelTarget, "nav-mobile");
          }
          close() {
            (0, a.Zu)(this.panelTarget, "nav-mobile");
          }
        }
        (r = l),
          (s = ["panel"]),
          (n = (function (e) {
            var t = (function (e, t) {
              if ("object" != typeof e || null === e) return e;
              var i = e[Symbol.toPrimitive];
              if (void 0 !== i) {
                var r = i.call(e, t);
                if ("object" != typeof r) return r;
                throw new TypeError("@@toPrimitive must return a primitive value.");
              }
              return String(e);
            })(e, "string");
            return "symbol" == typeof t ? t : String(t);
          })((n = "targets"))) in r
            ? Object.defineProperty(r, n, {
                value: s,
                enumerable: !0,
                configurable: !0,
                writable: !0,
              })
            : (r[n] = s);
        class c extends o.Qr {
          connect() {}
          switch(e) {
            this.toggleActiveClass(),
              this.displayPanel(),
              this.dispatch("change", {
                detail: {
                  value: e.params.value,
                },
              });
          }
          toggleActiveClass() {
            this.tabTargets.forEach((e) => {
              e.classList.toggle("is-active", e === event.currentTarget);
            });
          }
          displayPanel() {
            this.tabTargets.forEach((e, t) => {
              const i = this.panelTargets[t];
              e.classList.contains("is-active") ? i.classList.remove("hidden") : i.classList.add("hidden");
            });
          }
        }
        !(function (e, t, i) {
          (t = (function (e) {
            var t = (function (e, t) {
              if ("object" != typeof e || null === e) return e;
              var i = e[Symbol.toPrimitive];
              if (void 0 !== i) {
                var r = i.call(e, t);
                if ("object" != typeof r) return r;
                throw new TypeError("@@toPrimitive must return a primitive value.");
              }
              return String(e);
            })(e, "string");
            return "symbol" == typeof t ? t : String(t);
          })(t)) in e
            ? Object.defineProperty(e, t, {
                value: i,
                enumerable: !0,
                configurable: !0,
                writable: !0,
              })
            : (e[t] = i);
        })(c, "targets", ["tab", "panel"]);
        var u = i(418);
        class d extends o.Qr {
          toggle() {
            (0, u.Z)(this.bodyTarget, {
              duration: 300,
            }),
              this.element.classList.toggle("is-open");
          }
        }
        !(function (e, t, i) {
          (t = (function (e) {
            var t = (function (e, t) {
              if ("object" != typeof e || null === e) return e;
              var i = e[Symbol.toPrimitive];
              if (void 0 !== i) {
                var r = i.call(e, t);
                if ("object" != typeof r) return r;
                throw new TypeError("@@toPrimitive must return a primitive value.");
              }
              return String(e);
            })(e, "string");
            return "symbol" == typeof t ? t : String(t);
          })(t)) in e
            ? Object.defineProperty(e, t, {
                value: i,
                enumerable: !0,
                configurable: !0,
                writable: !0,
              })
            : (e[t] = i);
        })(d, "targets", ["body"]);
        class h extends o.Qr {
          initialize() {
            this.open = this.open.bind(this);
          }
          connect() {
            this.triggerTarget.addEventListener("click", this.open);
          }
          open() {
            const e = this.dropdownTarget;

            function t(i) {
              e.contains(i.target) || ((0, a.Zu)(e, "dropdown"), window.removeEventListener("click", t));
            }
            e.classList.contains("hidden") &&
              (e.classList.remove("hidden"),
              (0, a.IO)(e, "dropdown"),
              window.requestAnimationFrame(() => {
                window.addEventListener("click", t);
              }));
          }
        }
        !(function (e, t, i) {
          (t = (function (e) {
            var t = (function (e, t) {
              if ("object" != typeof e || null === e) return e;
              var i = e[Symbol.toPrimitive];
              if (void 0 !== i) {
                var r = i.call(e, t);
                if ("object" != typeof r) return r;
                throw new TypeError("@@toPrimitive must return a primitive value.");
              }
              return String(e);
            })(e, "string");
            return "symbol" == typeof t ? t : String(t);
          })(t)) in e
            ? Object.defineProperty(e, t, {
                value: i,
                enumerable: !0,
                configurable: !0,
                writable: !0,
              })
            : (e[t] = i);
        })(h, "targets", ["trigger", "dropdown"]);
        var p = i(51);
        class v extends o.Qr {
          connect() {
            const e = Object.assign({}, this.defaultOptions, this.optionsValue);
            this.swiperInstance = new p.ZP(this.element, e);
          }
          get defaultOptions() {
            return {
              modules: [p.oM, p.LW, p.pt],
              direction: "horizontal",
              loop: !1,
              scrollbar: {
                el: ".swiper-scrollbar",
                draggable: !0,
              },
              slidesPerView: 5,
              centerInsufficientSlides: !0,
              grabCursor: !0,
              preloadImages: !1,
              watchSlidesVisibility: !0,
              roundLengths: !0,
              lazy: {
                checkInView: !0,
              },
              resistanceRatio: 0.6,
              watchOverflow: !0,
            };
          }
        }

        function g(e, t, i) {
          return (
            (t = (function (e) {
              var t = (function (e, t) {
                if ("object" != typeof e || null === e) return e;
                var i = e[Symbol.toPrimitive];
                if (void 0 !== i) {
                  var r = i.call(e, t);
                  if ("object" != typeof r) return r;
                  throw new TypeError("@@toPrimitive must return a primitive value.");
                }
                return String(e);
              })(e, "string");
              return "symbol" == typeof t ? t : String(t);
            })(t)) in e
              ? Object.defineProperty(e, t, {
                  value: i,
                  enumerable: !0,
                  configurable: !0,
                  writable: !0,
                })
              : (e[t] = i),
            e
          );
        }
        !(function (e, t, i) {
          (t = (function (e) {
            var t = (function (e, t) {
              if ("object" != typeof e || null === e) return e;
              var i = e[Symbol.toPrimitive];
              if (void 0 !== i) {
                var r = i.call(e, t);
                if ("object" != typeof r) return r;
                throw new TypeError("@@toPrimitive must return a primitive value.");
              }
              return String(e);
            })(e, "string");
            return "symbol" == typeof t ? t : String(t);
          })(t)) in e
            ? Object.defineProperty(e, t, {
                value: i,
                enumerable: !0,
                configurable: !0,
                writable: !0,
              })
            : (e[t] = i);
        })(v, "values", {
          options: Object,
        });
        class m extends o.Qr {
          initialize() {
            (this.tick = this.tick.bind(this)), this.tick(), (this.interval = setInterval(this.tick, 1e3));
          }
          tick() {
            const e = this.timestampValue - Date.now();
            if (e < 0) return void clearInterval(this.interval);
            const t = Math.floor(e / 864e5),
              i = Math.floor((e % 864e5) / 36e5),
              r = Math.floor((e % 36e5) / 6e4),
              n = Math.floor((e % 6e4) / 1e3);
            (this.daysTarget.textContent = this.pad(t)),
              (this.hoursTarget.textContent = this.pad(i)),
              (this.minutesTarget.textContent = this.pad(r)),
              (this.secondsTarget.textContent = this.pad(n));
          }
          pad(e) {
            return String(e).padStart(2, "0");
          }
        }
        g(m, "targets", ["days", "hours", "minutes", "seconds"]),
          g(m, "values", {
            timestamp: Number,
          });
        class f extends o.Qr {
          createPopup(e) {
            const t = void 0 !== window.screenLeft ? window.screenLeft : window.screenX,
              i = void 0 !== window.screenTop ? window.screenTop : window.screenY,
              r = window.innerWidth
                ? window.innerWidth
                : document.documentElement.clientWidth
                ? document.documentElement.clientWidth
                : screen.width,
              n = window.innerHeight
                ? window.innerHeight
                : document.documentElement.clientHeight
                ? document.documentElement.clientHeight
                : screen.height,
              s = r / window.screen.availWidth,
              o = (r - 600) / 2 / s + t,
              a = (n - 400) / 2 / s + i,
              l = window.open(
                e,
                "",
                `\n        scrollbars=yes,\n        width=${600 / s}, \n        height=${
                  400 / s
                }, \n        top=${a}, \n        left=${o}\n        `
              );
            window.focus && l.focus();
          }
          sharePage(e) {
            let { params: t } = e;
            const i = encodeURIComponent(window.location.origin + window.location.pathname);
            switch (t.network) {
              case "facebook":
                this.createPopup(`https://www.facebook.com/sharer/sharer.php?u=${i}`);
                break;
              case "twitter":
                this.createPopup(`https://twitter.com/intent/tweet?url=${i}`);
            }
          }
        }
        class b extends o.Qr {
          connect() {
            const e = this.element;
            e.style.setProperty("--value", e.value),
              e.style.setProperty("--min", e.min || "0"),
              e.style.setProperty("--max", e.max || "100"),
              e.addEventListener("input", () => e.style.setProperty("--value", e.value));
          }
        }
        var y = i(466);
        class w extends o.Qr {
          connect() {
            this.slimselect = new y.Z({
              select: this.element,
              showSearch: !1,
              hideSelectedOption: !0,
              onChange: (e) => {
                this.dispatch("change", {
                  detail: e,
                });
              },
              ...this.optionsValue,
            });
          }
          disconnect() {
            this.slimselect.destroy();
          }
        }
        !(function (e, t, i) {
          (t = (function (e) {
            var t = (function (e, t) {
              if ("object" != typeof e || null === e) return e;
              var i = e[Symbol.toPrimitive];
              if (void 0 !== i) {
                var r = i.call(e, t);
                if ("object" != typeof r) return r;
                throw new TypeError("@@toPrimitive must return a primitive value.");
              }
              return String(e);
            })(e, "string");
            return "symbol" == typeof t ? t : String(t);
          })(t)) in e
            ? Object.defineProperty(e, t, {
                value: i,
                enumerable: !0,
                configurable: !0,
                writable: !0,
              })
            : (e[t] = i);
        })(w, "values", {
          options: Object,
        });
        var _ = i(131);

        function S(e) {
          let t = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : {};
          return (e = Number(e)).toLocaleString("en", t);
        }

        function P(e, t, i) {
          return (
            (t = (function (e) {
              var t = (function (e, t) {
                if ("object" != typeof e || null === e) return e;
                var i = e[Symbol.toPrimitive];
                if (void 0 !== i) {
                  var r = i.call(e, t);
                  if ("object" != typeof r) return r;
                  throw new TypeError("@@toPrimitive must return a primitive value.");
                }
                return String(e);
              })(e, "string");
              return "symbol" == typeof t ? t : String(t);
            })(t)) in e
              ? Object.defineProperty(e, t, {
                  value: i,
                  enumerable: !0,
                  configurable: !0,
                  writable: !0,
                })
              : (e[t] = i),
            e
          );
        }
        class T extends o.Qr {
          connect() {
            this.initCurrencySelect(),
              this.initAmountInput(),
              this.initPeriodInput(),
              this.setVisual(),
              this.calculate();
          }
          initCurrencySelect() {
            const e = this.paramsValue.map((e) => ({
              text: e.name,
              value: e.cid,
              innerHTML: `<img src="public/img/crypto/${e.cid}.svg" class="ss-option-icon" alt=""><span>${e.name}</span><span class="ml-auto text-secondary">${e.estApy}%</span>`,
            }));
            this.currencySelect = new y.Z({
              select: this.currencyTarget,
              data: e,
              showSearch: !1,
              hideSelectedOption: !0,
              onChange: (e) => {
                this.calculate();
              },
            });
          }
          initAmountInput() {
            (this.amountInput = (0, _.ZP)(this.amountTarget, {
              mask: Number,
              scale: 2,
              signed: !1,
              thousandsSeparator: ",",
              padFractionalZeros: !0,
              normalizeZeros: !0,
              radix: ".",
              mapToRadix: [",", "."],
              min: 0,
            })),
              this.amountInput.on("accept", this.calculate.bind(this));
          }
          initPeriodInput() {
            this.periodTarget.addEventListener("input", (e) => {
              (this.monthsTarget.textContent = e.target.value), this.setVisual(), this.calculate();
            });
          }
          setVisual() {
            this.visualTarget.style.width = (this.periodTarget.value / this.periodTarget.max) * 100 + "%";
          }
          calculate() {
            const e = this.currencySelect.selected(),
              t = Number(this.amountInput.unmaskedValue),
              i = Number(this.periodTarget.value),
              r = ((t * this.paramsValue.find((t) => t.cid === e).stakePercentDaily) / 100) * i * 30;
            this.resultTarget.textContent = (function (e) {
              return `${S(e, {
                minimumFractionDigits: 2,
                maximumFractionDigits: 2,
                ...(arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : {}),
              })} USD`;
            })(r);
          }
        }
        P(T, "targets", ["currency", "amount", "period", "months", "result", "visual"]),
          P(T, "values", {
            params: Array,
          });
        var x = i(721),
          j = i(927),
          k = i.n(j),
          C = i(478),
          O = (e, t) => Math.floor(Math.random() * (t - e)) + e;

        function $(e, t, i) {
          return (
            (t = (function (e) {
              var t = (function (e, t) {
                if ("object" != typeof e || null === e) return e;
                var i = e[Symbol.toPrimitive];
                if (void 0 !== i) {
                  var r = i.call(e, t);
                  if ("object" != typeof r) return r;
                  throw new TypeError("@@toPrimitive must return a primitive value.");
                }
                return String(e);
              })(e, "string");
              return "symbol" == typeof t ? t : String(t);
            })(t)) in e
              ? Object.defineProperty(e, t, {
                  value: i,
                  enumerable: !0,
                  configurable: !0,
                  writable: !0,
                })
              : (e[t] = i),
            e
          );
        }
        class E extends o.Qr {
          connect() {
            this.initRequestData(),
              (this.buyAnimate = (0, C.ZP)(this.buyTarget, {
                disrespectUserMotionPreference: !0,
              })),
              (this.sellAnimate = (0, C.ZP)(this.sellTarget, {
                disrespectUserMotionPreference: !0,
              })),
              document.addEventListener("visibilitychange", () => {
                "visible" === document.visibilityState
                  ? (this.buyAnimate.enable(), this.sellAnimate.enable())
                  : (this.buyAnimate.disable(), this.sellAnimate.disable());
              });
          }
          initRequestData() {
            const e = this;
            setTimeout(function t() {
              x.ZP.get("site/price-currency.json")
                .then((t) => {
                  (e.newData = t.data.data.result), e.updateData();
                })
                .catch((e) => console.error(e))
                .finally(() => setTimeout(t, O(3e3, 1e4)));
            }, O(3e3, 1e4));
          }
          updateData() {
            this.updateCid(), this.updateChartData(), this.updateWrapped(), this.updateBuy(), this.updateSell();
          }
          updateWrapped() {
            Object.entries(this.newData.cidWrapped).forEach((e) => {
              let [t, i] = e,
                r = "";
              i.forEach((e) => {
                r += `\n        <div class="op-rate__item">\n          <img src="public/img/explorers/${
                  e.sistemSlug
                }.svg" alt="" loading="eager" width="32"\n            height="32" class="op-rate__currency">\n          <div>\n            <div class="op-rate__name">${
                  e.name
                } ${e.nameAddition}</div>\n            <div class="op-rate__title">${
                  e.title
                }</div>\n          </div>\n          <div class="op-rate__value ${
                  e.volume24DeltaUsd > 0 ? "is-up" : "is-down"
                }">\n            $${
                  e.priceUsd
                }\n            <svg class="icon op-rate__value-icon">\n              <use xlink:href="public/icons/sprite.svg#icons-arrow-down"></use>\n            </svg>\n          </div>\n        </div>\n        `;
              }),
                (this.wrappedTargets.find((e) => e.dataset.cid === t).innerHTML = r);
            });
          }
          updateBuy() {
            let e = "";
            this.newData.operationWrapped.buy.forEach((t) => {
              e += `\n      <div class="buy-order">\n        <div class="buy-order__item">\n          <img src="public/img/crypto/USDT.svg" class="buy-order__currency" alt="" loading="lazy" width="32"\n            height="32">\n          <div class="buy-order__body">\n            <div class="buy-order__value">${t.priceUsd}</div>\n            <div class="buy-order__label">${t.sistem}</div>\n          </div>\n        </div>\n        <svg class="icon buy-order__arr">\n          <use xlink:href="public/icons/sprite.svg#icons-arrow-right"></use>\n        </svg>\n        <div class="buy-order__item">\n          <img src="public/img/explorers/${t.sistemSlug}.svg" class="buy-order__currency" alt=""\n            loading="lazy" width="32" height="32">\n          <div class="buy-order__body">\n            <div class="buy-order__value">${t.wrappedCid}</div>\n            <div class="buy-order__label">${t.sistem}</div>\n          </div>\n        </div>\n      </div>\n      `;
            }),
              this.buyTarget.insertAdjacentHTML("afterbegin", e),
              this.buyTarget.removeChild(this.buyTarget.lastElementChild);
          }
          updateSell() {
            let e = "";
            this.newData.operationWrapped.sell.forEach((t) => {
              e += `\n      <div class="sell-order">\n        <div class="sell-order__item">\n          <img src="public/img/explorers/${t.sistemSlug}.svg" class="sell-order__currency" alt=""\n            loading="lazy" width="32" height="32">\n          <div class="sell-order__body">\n            <div class="sell-order__value">${t.wrappedCid}</div>\n            <div class="sell-order__label">${t.sistem}</div>\n          </div>\n        </div>\n        <div class="sell-order__item">\n          <div class="sell-order__body">\n            <div class="sell-order__value">${t.priceUsd}</div>\n            <div class="sell-order__label">= 1 ${t.wrappedCid}</div>\n          </div>\n        </div>        \n        <svg class="icon sell-order__arr">\n          <use xlink:href="public/icons/sprite.svg#icons-arrow-right"></use>\n        </svg>\n        <div class="sell-order__item">\n          <img src="public/img/crypto/USDT.svg" class="sell-order__currency" alt="" loading="lazy" width="32"\n            height="32">\n          <div class="sell-order__body">\n            <div class="sell-order__value text-secondary">${t.profit}</div>\n            <div class="sell-order__label">Profit</div>\n          </div>\n        </div>\n      </div>\n      `;
            }),
              this.sellTarget.insertAdjacentHTML("afterbegin", e),
              this.sellTarget.removeChild(this.sellTarget.lastElementChild);
          }
          onCurrencyChange(e) {
            let {
              detail: { value: t },
            } = e;
            this.cidValue = t;
          }
          cidValueChanged() {
            this.chart || this.renderChart(), this.updateChartData(), this.toggleCid();
          }
          renderChart() {
            (this.chart = new (k())(this.chartTarget, this.chartOptions)), this.chart.render();
          }
          updateChartData() {
            const e = (this?.newData?.history || this.historyValue)[this.cidValue].map((e) => ({
              x: new Date(1e3 * e[0]),
              y: [...e.slice(1)],
            }));
            this.chart.updateOptions(
              {
                series: [
                  {
                    data: e,
                  },
                ],
              },
              !1
            ),
              this.addAnnotation();
          }
          addAnnotation() {
            const e = this.chart.w.config.series[0].data,
              t = this.chart.w.globals.minY,
              i = this.chart.w.globals.maxY,
              r = e[e.length - 1].y[3],
              n = ((r - t) / (i - t)) * 100;
            (this.annotationTarget.textContent = r),
              (this.annotationTarget.style.bottom = `${n}%`),
              this.annotationTarget.classList.remove("hidden");
          }
          toggleCid() {
            this.cidTargets.forEach((e) => {
              e.classList.toggle("hidden", e.dataset.cid !== this.cidValue);
            });
          }
          updateCid() {
            let e = "";
            Object.entries(this.newData.cid).forEach((t) => {
              let [i, r] = t;
              e += `\n      <div data-cid="${i}" data-matrix-target="cid">\n        <div class="text-primary-h4 font-black mb-8">${
                "BTC" === i ? "Bitcoin" : "Ethereum"
              } â€“ USDT</div>\n        <div class="text-primary-h5">\n          <span>${
                r.price
              }</span>\n          <span class="ml-32 ${
                r.percent_change_24h > 0 ? "text-secondary" : "text-danger"
              }">\n            ${r.percent_change_24h > 0 ? "+" : ""}${
                r.percent_change_24h
              }%\n          </span>\n        </div>\n      </div>\n      `;
            }),
              (this.rateTarget.innerHTML = e),
              this.toggleCid();
          }
          get chartOptions() {
            return {
              series: [],
              chart: {
                type: "candlestick",
                height: 400,
                fontFamily: "var(--font-body)",
                foreColor: "var(--color-dark)",
                selection: {
                  enabled: !1,
                },
                toolbar: {
                  show: !1,
                },
                zoom: {
                  enabled: !1,
                },
              },
              grid: {
                borderColor: "#eaeaeb",
                strokeDashArray: 7,
                yaxis: {
                  lines: {
                    show: !0,
                  },
                },
                padding: {
                  left: -10,
                },
              },
              xaxis: {
                type: "datetime",
                tooltip: {
                  enabled: !1,
                },
                axisBorder: {
                  show: !1,
                },
                axisTicks: {
                  show: !1,
                },
                labels: {
                  offsetY: 4,
                  offsetX: -8,
                },
                crosshairs: {
                  stroke: {
                    color: "#eaeaeb",
                    width: 1,
                    dashArray: 0,
                  },
                },
              },
              yaxis: {
                decimalsInFloat: 0,
                tooltip: {
                  enabled: !1,
                },
                labels: {
                  offsetX: -8,
                  align: "right",
                },
                opposite: !0,
              },
              plotOptions: {
                candlestick: {
                  colors: {
                    upward: "#09be8b",
                    downward: "#fb4e4e",
                  },
                },
              },
              states: {
                hover: {
                  filter: {
                    type: "none",
                    value: 0,
                  },
                },
              },
            };
          }
        }
        $(E, "targets", ["chart", "annotation", "cid", "rate", "wrapped", "buy", "sell"]),
          $(E, "values", {
            cid: String,
            history: Object,
          });
        var L = i(685),
          V = i(689);
        class D extends o.Qr {
          connect() {
            this.notyf = new L.Iq({
              duration: 4e3,
              ripple: !1,
              position: {
                x: "right",
                y: "top",
              },
            });
          }
          submitForm(e) {
            e.preventDefault();
            const t = Object.fromEntries(new FormData(this.formTarget));
            (this.submitTarget.disabled = !0),
              (0, x.ZP)({
                method: this.formTarget.method,
                url: this.formTarget.action,
                data: t,
                headers: {
                  "x-client": "web",
                },
              })
                .then((e) => {
                  this.notyf.success("Your request has been successfully sent"), V.KR.close();
                })
                .catch((e) => {
                  e.response && 401 === e.response.status
                    ? this.notyf.error("Please login to continue")
                    : this.notyf.error("Something went wrong");
                })
                .finally(() => {
                  this.submitTarget.disabled = !1;
                });
          }
        }

        function A(e, t, i) {
          return (
            (t = (function (e) {
              var t = (function (e, t) {
                if ("object" != typeof e || null === e) return e;
                var i = e[Symbol.toPrimitive];
                if (void 0 !== i) {
                  var r = i.call(e, t);
                  if ("object" != typeof r) return r;
                  throw new TypeError("@@toPrimitive must return a primitive value.");
                }
                return String(e);
              })(e, "string");
              return "symbol" == typeof t ? t : String(t);
            })(t)) in e
              ? Object.defineProperty(e, t, {
                  value: i,
                  enumerable: !0,
                  configurable: !0,
                  writable: !0,
                })
              : (e[t] = i),
            e
          );
        }
        !(function (e, t, i) {
          (t = (function (e) {
            var t = (function (e, t) {
              if ("object" != typeof e || null === e) return e;
              var i = e[Symbol.toPrimitive];
              if (void 0 !== i) {
                var r = i.call(e, t);
                if ("object" != typeof r) return r;
                throw new TypeError("@@toPrimitive must return a primitive value.");
              }
              return String(e);
            })(e, "string");
            return "symbol" == typeof t ? t : String(t);
          })(t)) in e
            ? Object.defineProperty(e, t, {
                value: i,
                enumerable: !0,
                configurable: !0,
                writable: !0,
              })
            : (e[t] = i);
        })(D, "targets", ["form", "submit"]);
        class M extends o.Qr {
          initialize() {
            for (this._videos = this.videosValue, this._chunks = []; this._videos.length > 0; )
              this._chunks.push(this._videos.splice(0, this.pageSizeValue));
          }
          get videosCount() {
            return this.ytVideosTarget.querySelectorAll("iframe").length;
          }
          checkLoadedVideos() {
            this.videosCount === this.videosCountValue && (this.showMoreTarget.parentElement.hidden = !0);
          }
          currentPageValueChanged(e) {
            const t = this._chunks[e]
              .map(
                (e) =>
                  `\n          <iframe src="https://www.youtube.com/embed/${e}" title="YouTube video player" frameborder="0"\n          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"\n          allowfullscreen></iframe>\n        `
              )
              .join("");
            this.ytVideosTarget.insertAdjacentHTML("beforeend", t), this.checkLoadedVideos();
          }
          showMoreHandler() {
            this.currentPageValue = this.currentPageValue += 1;
          }
        }
        A(M, "targets", ["showMore", "ytVideos"]),
          A(M, "values", {
            pageSize: Number,
            videosCount: Number,
            currentPage: Number,
            videos: Array,
          });
        class I extends o.Qr {
          switch(e) {
            const t = e.currentTarget.dataset.lang;
            (this.valueTarget.value = t), this.element.submit();
          }
        }
        !(function (e, t, i) {
          (t = (function (e) {
            var t = (function (e, t) {
              if ("object" != typeof e || null === e) return e;
              var i = e[Symbol.toPrimitive];
              if (void 0 !== i) {
                var r = i.call(e, t);
                if ("object" != typeof r) return r;
                throw new TypeError("@@toPrimitive must return a primitive value.");
              }
              return String(e);
            })(e, "string");
            return "symbol" == typeof t ? t : String(t);
          })(t)) in e
            ? Object.defineProperty(e, t, {
                value: i,
                enumerable: !0,
                configurable: !0,
                writable: !0,
              })
            : (e[t] = i);
        })(I, "targets", ["value"]);
        const Q = {
          topped_up_wallet: {
            buttonProps: {
              icon: '<svg class="icon"><use xlink:href="/icons/sprite.svg#icons-plus"></use></svg>',
              theme: "secondary",
            },
          },
          joined_neosify: {
            buttonProps: {
              icon: '<svg class="icon"><use xlink:href="/icons/sprite.svg#icons-user"></use></svg>',
              theme: "secondary",
            },
          },
          invited_a_follower: {
            buttonProps: {
              icon: '<svg class="icon"><use xlink:href="/icons/sprite.svg#icons-users"></use></svg>',
              theme: "secondary",
            },
          },
          staked_bitcoin: {
            buttonProps: {
              icon: '<img src="/img/crypto/BTC.svg" alt="" width="16" height="16">',
              theme: "light",
            },
          },
          exchanged_crypto: {
            buttonProps: {
              icon: '<svg class="icon"><use xlink:href="/icons/sprite.svg#icons-sync"></use></svg>',
              theme: "light",
            },
          },
          joined_red_pill_pro: {
            buttonProps: {
              icon: '<svg class="icon"><use xlink:href="/icons/sprite.svg#icons-medal"></use></svg>',
              theme: "danger",
            },
          },
          staked_litecoin: {
            buttonProps: {
              icon: '<img src="/img/crypto/LTC.svg" alt="" width="16" height="16">',
              theme: "light",
            },
          },
          withdrawn_crypto: {
            buttonProps: {
              icon: '<svg class="icon"><use xlink:href="/icons/sprite.svg#icons-withdraw"></use></svg>',
              theme: "light",
            },
          },
          made_a_video_review: {
            buttonProps: {
              icon: '<svg class="icon"><use xlink:href="/icons/sprite.svg#icons-play"></use></svg>',
              theme: "primary",
            },
          },
          staked_neos: {
            buttonProps: {
              icon: '<img src="/img/crypto/NEOS.svg" alt="" width="16" height="16">',
              theme: "light",
            },
          },
          left_a_comment: {
            buttonProps: {
              icon: '<svg class="icon"><use xlink:href="/icons/sprite.svg#icons-comment"></use></svg>',
              theme: "primary",
            },
          },
          earned_neos_reward: {
            buttonProps: {
              icon: '<svg class="icon"><use xlink:href="/icons/sprite.svg#icons-gift"></use></svg>',
              theme: "primary",
            },
          },
          liked_a_Comment: {
            buttonProps: {
              icon: '<svg class="icon"><use xlink:href="/icons/sprite.svg#icons-heart"></use></svg>',
              theme: "danger",
            },
          },
        };
        class Z extends o.Qr {
          connect() {
            (this.state = {}), this.fetchProofTask();
          }
          async fetchProofTask() {
            const e = 1e3 * O(10, 30);
            var t;
            await ((t = e), new Promise((e) => setTimeout(e, t)));
            const { data: i } = await (0, x.ZP)({
              url: "/api/soc-proof/index",
              method: "get",
              headers: {
                "x-client": "web",
              },
            });
            (this.state = i.data), this.renderNotification(), this.fetchProofTask();
          }
          renderNotification() {
            const e = `\n      <div class="soc-proof ${
              this.state.type
            }">\n        <div class="soc-proof__avatar-container">\n          <img src="${
              this.state.avatar
            }" alt="" width="32" height="32" class="soc-proof__avatar" />\n        </div>\n        <div class="soc-proof__button icon-raised icon-raised--${
              Q[this.state.type].buttonProps.theme
            } icon-raised--xs">\n          ${
              Q[this.state.type].buttonProps.icon
            }\n        </div>\n        <div class="soc-proof__body">\n          <div class="soc-proof__username">${
              this.state.userName
            } has just</div>\n          <div class="soc-proof__typename">${
              this.state.typeName
            }</div>\n        </div>\n      </div>\n    `;
            (this.containerTarget.innerHTML = e), setTimeout(() => (this.containerTarget.innerHTML = ""), 8e3);
          }
        }
        !(function (e, t, i) {
          (t = (function (e) {
            var t = (function (e, t) {
              if ("object" != typeof e || null === e) return e;
              var i = e[Symbol.toPrimitive];
              if (void 0 !== i) {
                var r = i.call(e, t);
                if ("object" != typeof r) return r;
                throw new TypeError("@@toPrimitive must return a primitive value.");
              }
              return String(e);
            })(e, "string");
            return "symbol" == typeof t ? t : String(t);
          })(t)) in e
            ? Object.defineProperty(e, t, {
                value: i,
                enumerable: !0,
                configurable: !0,
                writable: !0,
              })
            : (e[t] = i);
        })(Z, "targets", ["container"]);
        var F = i(955);
        class H extends o.Qr {
          close() {
            this.element.classList.add("hidden"),
              F.Z.set("friday", "hidden", {
                expires: 90,
              });
          }
        }
        !(function (e, t, i) {
          (t = (function (e) {
            var t = (function (e, t) {
              if ("object" != typeof e || null === e) return e;
              var i = e[Symbol.toPrimitive];
              if (void 0 !== i) {
                var r = i.call(e, t);
                if ("object" != typeof r) return r;
                throw new TypeError("@@toPrimitive must return a primitive value.");
              }
              return String(e);
            })(e, "string");
            return "symbol" == typeof t ? t : String(t);
          })(t)) in e
            ? Object.defineProperty(e, t, {
                value: i,
                enumerable: !0,
                configurable: !0,
                writable: !0,
              })
            : (e[t] = i);
        })(H, "targets", ["close"]);
        var z = i(192),
          N = i.n(z);

        (window.Stimulus = o.Mx.start()),
          Stimulus.register("nav", l),
          Stimulus.register("tabs", c),
          Stimulus.register("accordion", d),
          Stimulus.register("dropdown", h),
          Stimulus.register("swiper", v),
          Stimulus.register("countdown", m),
          Stimulus.register("share", f),
          Stimulus.register("range", b),
          Stimulus.register("select", w),
          Stimulus.register("stake-calculator", T),
          Stimulus.register("matrix", E),
          Stimulus.register("apply-red-pill", D),
          Stimulus.register("community", M),
          Stimulus.register("lang", I),
          Stimulus.register("soc-proof", Z),
          Stimulus.register("friday", H),
          // document.getElementById("typewriter") &&
          //   new (N())("#typewriter", {
          //     loop: !0,
          //   })
          //   .typeString("Investment\n")
          //   .pauseFor(1200)
          //   .deleteAll()
          //   .typeString("Monitoring\n")
          //   .pauseFor(1200)
          //   .deleteAll()
          //   .typeString("Insurance\n")
          //   .pauseFor(1200)
          //   .deleteAll()
          //   .typeString("Entertainment\n")
          //   .pauseFor(1200)
          // .start(),
          (V.KR.defaults.Hash = !1),
          (V.KR.defaults.autoFocus = !1),
          (V.KR.defaults.dragToClose = !1),
          (V.KR.defaults.trapFocus = !1),
          V.KR.bind("[data-fancybox]", {});
      },
    },
    i = {};

  function r(e) {
    var n = i[e];
    if (void 0 !== n) return n.exports;
    var s = (i[e] = {
      exports: {},
    });
    return t[e].call(s.exports, s, s.exports, r), s.exports;
  }
  (r.m = t),
    (e = []),
    (r.O = function (t, i, n, s) {
      if (!i) {
        var o = 1 / 0;
        for (u = 0; u < e.length; u++) {
          (i = e[u][0]), (n = e[u][1]), (s = e[u][2]);
          for (var a = !0, l = 0; l < i.length; l++)
            (!1 & s || o >= s) &&
            Object.keys(r.O).every(function (e) {
              return r.O[e](i[l]);
            })
              ? i.splice(l--, 1)
              : ((a = !1), s < o && (o = s));
          if (a) {
            e.splice(u--, 1);
            var c = n();
            void 0 !== c && (t = c);
          }
        }
        return t;
      }
      s = s || 0;
      for (var u = e.length; u > 0 && e[u - 1][2] > s; u--) e[u] = e[u - 1];
      e[u] = [i, n, s];
    }),
    (r.n = function (e) {
      var t =
        e && e.__esModule
          ? function () {
              return e.default;
            }
          : function () {
              return e;
            };
      return (
        r.d(t, {
          a: t,
        }),
        t
      );
    }),
    (r.d = function (e, t) {
      for (var i in t)
        r.o(t, i) &&
          !r.o(e, i) &&
          Object.defineProperty(e, i, {
            enumerable: !0,
            get: t[i],
          });
    }),
    (r.o = function (e, t) {
      return Object.prototype.hasOwnProperty.call(e, t);
    }),
    (function () {
      var e = {
        179: 0,
      };
      r.O.j = function (t) {
        return 0 === e[t];
      };
      var t = function (t, i) {
          var n,
            s,
            o = i[0],
            a = i[1],
            l = i[2],
            c = 0;
          if (
            o.some(function (t) {
              return 0 !== e[t];
            })
          ) {
            for (n in a) r.o(a, n) && (r.m[n] = a[n]);
            if (l) var u = l(r);
          }
          for (t && t(i); c < o.length; c++) (s = o[c]), r.o(e, s) && e[s] && e[s][0](), (e[s] = 0);
          return r.O(u);
        },
        i = (self.webpackChunkfrontend = self.webpackChunkfrontend || []);
      i.forEach(t.bind(null, 0)), (i.push = t.bind(null, i.push.bind(i)));
    })();
  var n = r.O(void 0, [730], function () {
    return r(537);
  });
  n = r.O(n);
})();
