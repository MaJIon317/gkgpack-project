! function(t, e) {
    "object" == typeof exports && "undefined" != typeof module ? module.exports = e() : "function" == typeof define && define.amd ? define(e) : (t = "undefined" != typeof globalThis ? globalThis : t || self).WebcamBarcodeScanner = e()
}(this, (function() {
    "use strict";
    class t {
        constructor(t) {
            this._events = {}
        }
        on(t, e) {
            this._events[t] = this._events[t] || [], this._events[t].push(e)
        }
        emit(t, ...e) {
            let n = this._events[t];
            n && n.forEach((t => {
                setTimeout((() => t(...e)), 0)
            }))
        }
    }
    const e = Object.fromEntries([
            ["SSCC", ["00"]],
            ["GTIN", ["01"]],
            ["CONTENT", ["02"]],
            ["BATCH/LOT", ["10"]],
            ["PROD DATE", ["11"]],
            ["DUE DATE", ["12"]],
            ["PACK DATE", ["13"]],
            ["BEST BEFORE or BEST BY", ["15"]],
            ["SELL BY", ["16"]],
            ["USE BY OR EXPIRY", ["17"]],
            ["VARIANT", ["20"]],
            ["SERIAL", ["21"]],
            ["CPV", ["22"]],
            ["VAR. COUNT", ["30"]],
            ["COUNT", ["37"]],
            ["INTERNAL", ["90", "91", "92", "93", "94", "95", "96", "97", "98", "99"]],
            ["ADDITIONAL ID", ["240"]],
            ["CUST. PART NO.", ["241"]],
            ["MTO VARIANT", ["242"]],
            ["PCN", ["243"]],
            ["SECONDARY SERIAL", ["250"]],
            ["REF. TO SOURCE ", ["251"]],
            ["GDTI", ["253"]],
            ["GLN EXTENSION COMPONENT", ["254"]],
            ["GCN", ["255"]],
            ["ORDER NUMBER", ["400"]],
            ["GINC", ["401"]],
            ["GSIN", ["402"]],
            ["ROUTE", ["403"]],
            ["SHIP TO LOC", ["410"]],
            ["BILL TO ", ["411"]],
            ["PURCHASE FROM", ["412"]],
            ["SHIP FOR LOC", ["413"]],
            ["LOC No", ["414"]],
            ["PAY TO", ["415"]],
            ["PROD/SERV LOC", ["416"]],
            ["SHIP TO POST", ["420", "421"]],
            ["ORIGIN", ["422"]],
            ["COUNTRY - INITIAL PROCESS.", ["423"]],
            ["COUNTRY - PROCESS.", ["424"]],
            ["COUNTRY - DISASSEMBLY", ["425"]],
            ["COUNTRY - FULL PROCESS", ["426"]],
            ["ORIGIN SUBDIVISION", ["427"]],
            ["NHRN PZN", ["710"]],
            ["NHRN CIP", ["711"]],
            ["NHRN CN", ["712"]],
            ["NHRN DRN", ["713"]],
            ["NHRN AIM", ["714"]],
            ["NET WEIGHT (kg)", ["3100", "3101", "3102", "3103", "3104", "3105"]],
            ["LENGTH (m)", ["3110", "3111", "3112", "3113", "3114", "3115"]],
            ["WIDTH (m)", ["3120", "3121", "3122", "3123", "3124", "3125"]],
            ["HEIGHT (m)", ["3130", "3131", "3132", "3133", "3134", "3135"]],
            ["AREA (m^2)", ["3140", "3141", "3142", "3143", "3144", "3145"]],
            ["NET VOLUME (l)", ["3150", "3151", "3152", "3153", "3154", "3155"]],
            ["NET VOLUME (m^3)", ["3160", "3161", "3162", "3163", "3164", "3165"]],
            ["NET WEIGHT (lb)", ["3200", "3201", "3202", "3203", "3204", "3205"]],
            ["LENGTH (in)", ["3210", "3211", "3212", "3213", "3214", "3215"]],
            ["LENGTH (ft)", ["3220", "3221", "3222", "3223", "3224", "3225"]],
            ["LENGTH (yd)", ["3230", "3231", "3232", "3233", "3234", "3235"]],
            ["WIDTH (in)", ["3240", "3241", "3242", "3243", "3244", "3245"]],
            ["WIDTH (ft)", ["3250", "3251", "3252", "3253", "3254", "3255"]],
            ["WIDTH (yd)", ["3260", "3261", "3262", "3263", "3264", "3265"]],
            ["HEIGHT (in)", ["3270", "3271", "3272", "3273", "3274", "3275"]],
            ["HEIGHT (ft)", ["3280", "3281", "3282", "3283", "3284", "3285"]],
            ["HEIGHT (yd)", ["3290", "3291", "3292", "3293", "3294", "3295"]],
            ["GROSS WEIGHT (kg)", ["3300", "3301", "3302", "3303", "3304", "3305"]],
            ["LENGTH (m), log", ["3310", "3311", "3312", "3313", "3314", "3315"]],
            ["WIDTH (m), log", ["3320", "3321", "3322", "3323", "3324", "3325"]],
            ["HEIGHT (m), log", ["3330", "3331", "3332", "3333", "3334", "3335"]],
            ["AREA (m^2), log", ["3340", "3341", "3342", "3343", "3344", "3345"]],
            ["VOLUME (l), log", ["3350", "3351", "3352", "3353", "3354", "3355"]],
            ["VOLUME (m^3), log", ["3360", "3361", "3362", "3363", "3364", "3365"]],
            ["KG PER m^2", ["3370", "3371", "3372", "3373", "3374", "3375"]],
            ["GROSS WEIGHT (lb)", ["3400", "3401", "3402", "3403", "3404", "3405"]],
            ["LENGTH (in), log", ["3410", "3411", "3412", "3413", "3414", "3415"]],
            ["LENGTH (ft), log", ["3420", "3421", "3422", "3423", "3424", "3425"]],
            ["LENGTH (yd), log", ["3430", "3431", "3432", "3433", "3434", "3435"]],
            ["WIDTH (in), log", ["3440", "3441", "3442", "3443", "3444", "3445"]],
            ["WIDTH (ft), log", ["3450", "3451", "3452", "3453", "3454", "3455"]],
            ["WIDTH (yd), log", ["3460", "3461", "3462", "3463", "3464", "3465"]],
            ["HEIGHT (in), log", ["3470", "3471", "3472", "3473", "3474", "3475"]],
            ["HEIGHT (ft), log", ["3480", "3481", "3482", "3483", "3484", "3485"]],
            ["HEIGHT (yd), log", ["3490", "3491", "3492", "3493", "3494", "3495"]],
            ["AREA (in^2)", ["3500", "3501", "3502", "3503", "3504", "3505"]],
            ["AREA (ft^2)", ["3510", "3511", "3512", "3513", "3514", "3515"]],
            ["AREA (yd^2)", ["3520", "3521", "3522", "3523", "3524", "3525"]],
            ["AREA (in^2), log", ["3530", "3531", "3532", "3533", "3534", "3535"]],
            ["AREA (ft^2), log", ["3540", "3541", "3542", "3543", "3544", "3545"]],
            ["AREA (yd^2), log", ["3550", "3551", "3552", "3553", "3554", "3555"]],
            ["NET WEIGHT (t oz)", ["3560", "3561", "3562", "3563", "3564", "3565"]],
            ["NET VOLUME (oz)", ["3570", "3571", "3572", "3573", "3574", "3575"]],
            ["NET VOLUME (qt)", ["3600", "3601", "3602", "3603", "3604", "3605"]],
            ["NET VOLUME (gal.)", ["3610", "3611", "3612", "3613", "3614", "3615"]],
            ["VOLUME (qt), log", ["3620", "3621", "3622", "3623", "3624", "3625"]],
            ["VOLUME (gal.), log", ["3630", "3631", "3632", "3633", "3634", "3635"]],
            ["VOLUME (in^3) ", ["3640", "3641", "3642", "3643", "3644", "3645"]],
            ["VOLUME (ft^3) ", ["3650", "3651", "3652", "3653", "3654", "3655"]],
            ["VOLUME (yd^3) ", ["3660", "3661", "3662", "3663", "3664", "3665"]],
            ["VOLUME (in^3), log", ["3670", "3671", "3672", "3673", "3674", "3675"]],
            ["VOLUME (ft^3), log", ["3680", "3681", "3682", "3683", "3684", "3685"]],
            ["VOLUME (yd^3), log", ["3690", "3691", "3692", "3693", "3694", "3695"]],
            ["AMOUNT", ["3900", "3901", "3902", "3903", "3904", "3905", "3906", "3907", "3908", "3909", "3910", "3911", "3912", "3913", "3914", "3915", "3916", "3917", "3918", "3919"]],
            ["PRICE", ["3920", "3921", "3922", "3923", "3924", "3925", "3926", "3927", "3928", "3929", "3930", "3931", "3932", "3933", "3934", "3935", "3936", "3937", "3938", "3939"]],
            ["PRCNT OFF", ["3940", "3941", "3942", "3943"]],
            ["NSN", ["7001"]],
            ["MEAT CUT", ["7002"]],
            ["EXPIRY TIME", ["7003"]],
            ["ACTIVE POTENCY", ["7004"]],
            ["CATCH AREA", ["7005"]],
            ["FIRST FREEZE DATE", ["7006"]],
            ["HARVEST DATE", ["7007"]],
            ["AQUATIC SPECIES", ["7008"]],
            ["FISHING GEAR TYPE", ["7009"]],
            ["PROD METHOD", ["7010"]],
            ["REFURB LOT", ["7020"]],
            ["FUNC STAT", ["7021"]],
            ["REV STAT", ["7022"]],
            ["GIAI - ASSEMBLY", ["7023"]],
            ["PROCESSOR # 0", ["7030"]],
            ["PROCESSOR # 1", ["7031"]],
            ["PROCESSOR # 2", ["7032"]],
            ["PROCESSOR # 3", ["7033"]],
            ["PROCESSOR # 4", ["7034"]],
            ["PROCESSOR # 5", ["7035"]],
            ["PROCESSOR # 6", ["7036"]],
            ["PROCESSOR # 7", ["7037"]],
            ["PROCESSOR # 8", ["7038"]],
            ["PROCESSOR # 9", ["7039"]],
            ["CERT # 0", ["7230"]],
            ["CERT # 1", ["7231"]],
            ["CERT # 2", ["7232"]],
            ["CERT # 3", ["7233"]],
            ["CERT # 4", ["7234"]],
            ["CERT # 5", ["7235"]],
            ["CERT # 6", ["7236"]],
            ["CERT # 7", ["7237"]],
            ["CERT # 8", ["7238"]],
            ["CERT # 9", ["7239"]],
            ["DIMENSIONS", ["8001"]],
            ["CMT No", ["8002"]],
            ["GRAI", ["8003"]],
            ["GIAI", ["8004"]],
            ["PRICE PER UNIT", ["8005"]],
            ["ITIP", ["8006"]],
            ["IBAN", ["8007"]],
            ["PROD TIME", ["8008"]],
            ["OPT SEN", ["8009"]],
            ["CPID", ["8010"]],
            ["CPID SERIAL", ["8011"]],
            ["VERSION", ["8012"]],
            ["GMN (for medical devices, the default, global data title is BUDI-DI )", ["8013"]],
            ["GSRN - PROVIDER", ["8017"]],
            ["GSRN - RECIPIENT", ["8018"]],
            ["SRIN", ["8019"]],
            ["REF No", ["8020"]],
            ["ITIP CONTENT", ["8026"]],
            ["POINTS", ["8111"]],
            ["PRODUCT URL", ["8200"]]
        ].map((t => t[1].map((e => [e, t[0]])))).reduce(((t, e) => [...t, ...e]), [])),
        n = {
            "00": 20,
            "01": 16,
            "02": 16,
            "03": 16,
            "04": 18,
            11: 8,
            12: 8,
            13: 8,
            14: 8,
            15: 8,
            16: 8,
            17: 8,
            18: 8,
            19: 8,
            20: 4,
            31: 10,
            32: 10,
            33: 10,
            34: 10,
            35: 10,
            36: 10,
            41: 16
        },
        r = Object.fromEntries([
            ["(\\d{12,14}|\\d{8})", ["01"]],
            ["([\\x21-\\x22\\x25-\\x2F\\x30-\\x3F\\x41-\\x5A\\x5F\\x61-\\x7A]{0,20})", ["10", "21", "22", "243", "254", "420", "710", "711", "712", "713", "714", "7020", "7021", "7022", "8002", "8012"]],
            ["(\\d{6})", ["11", "12", "13", "15", "16", "17", "3100", "3101", "3102", "3103", "3104", "3105", "3110", "3111", "3112", "3113", "3114", "3115", "3120", "3121", "3122", "3123", "3124", "3125", "3130", "3131", "3132", "3133", "3134", "3135", "3140", "3141", "3142", "3143", "3144", "3145", "3150", "3151", "3152", "3153", "3154", "3155", "3160", "3161", "3162", "3163", "3164", "3165", "3200", "3201", "3202", "3203", "3204", "3205", "3210", "3211", "3212", "3213", "3214", "3215", "3220", "3221", "3222", "3223", "3224", "3225", "3230", "3231", "3232", "3233", "3234", "3235", "3240", "3241", "3242", "3243", "3244", "3245", "3250", "3251", "3252", "3253", "3254", "3255", "3260", "3261", "3262", "3263", "3264", "3265", "3270", "3271", "3272", "3273", "3274", "3275", "3280", "3281", "3282", "3283", "3284", "3285", "3290", "3291", "3292", "3293", "3294", "3295", "3300", "3301", "3302", "3303", "3304", "3305", "3310", "3311", "3312", "3313", "3314", "3315", "3320", "3321", "3322", "3323", "3324", "3325", "3330", "3331", "3332", "3333", "3334", "3335", "3340", "3341", "3342", "3343", "3344", "3345", "3350", "3351", "3352", "3353", "3354", "3355", "3360", "3361", "3362", "3363", "3364", "3365", "3370", "3371", "3372", "3373", "3374", "3375", "3400", "3401", "3402", "3403", "3404", "3405", "3410", "3411", "3412", "3413", "3414", "3415", "3420", "3421", "3422", "3423", "3424", "3425", "3430", "3431", "3432", "3433", "3434", "3435", "3440", "3441", "3442", "3443", "3444", "3445", "3450", "3451", "3452", "3453", "3454", "3455", "3460", "3461", "3462", "3463", "3464", "3465", "3470", "3471", "3472", "3473", "3474", "3475", "3480", "3481", "3482", "3483", "3484", "3485", "3490", "3491", "3492", "3493", "3494", "3495", "3500", "3501", "3502", "3503", "3504", "3505", "3510", "3511", "3512", "3513", "3514", "3515", "3520", "3521", "3522", "3523", "3524", "3525", "3530", "3531", "3532", "3533", "3534", "3535", "3540", "3541", "3542", "3543", "3544", "3545", "3550", "3551", "3552", "3553", "3554", "3555", "3560", "3561", "3562", "3563", "3564", "3565", "3570", "3571", "3572", "3573", "3574", "3575", "3600", "3601", "3602", "3603", "3604", "3605", "3610", "3611", "3612", "3613", "3614", "3615", "3620", "3621", "3622", "3623", "3624", "3625", "3630", "3631", "3632", "3633", "3634", "3635", "3640", "3641", "3642", "3643", "3644", "3645", "3650", "3651", "3652", "3653", "3654", "3655", "3660", "3661", "3662", "3663", "3664", "3665", "3670", "3671", "3672", "3673", "3674", "3675", "3680", "3681", "3682", "3683", "3684", "3685", "3690", "3691", "3692", "3693", "3694", "3695", "7006", "8005"]],
            ["(\\d{2})", ["20"]],
            ["(\\d{0,8})", ["30", "37"]],
            ["([\\x21-\\x22\\x25-\\x2F\\x30-\\x3F\\x41-\\x5A\\x5F\\x61-\\x7A]{0,30})", ["90", "240", "241", "250", "251", "400", "401", "403", "7002", "7023", "8004", "8013"]],
            ["([\\x21-\\x22\\x25-\\x2F\\x30-\\x3F\\x41-\\x5A\\x5F\\x61-\\x7A]{0,90})", ["91", "92", "93", "94", "95", "96", "97", "98", "99"]],
            ["(\\d{0,6})", ["242"]],
            ["(\\d{13})([\\x21-\\x22\\x25-\\x2F\\x30-\\x3F\\x41-\\x5A\\x5F\\x61-\\x7A]{0,17})", ["253"]],
            ["(\\d{13})(\\d{0,12})", ["255"]],
            ["(\\d{17})", ["402"]],
            ["(\\d{13})", ["410", "411", "412", "413", "414", "415", "416", "7001"]],
            ["(\\d{3})([\\x21-\\x22\\x25-\\x2F\\x30-\\x3F\\x41-\\x5A\\x5F\\x61-\\x7A]{0,9})", ["421"]],
            ["(\\d{3})", ["422", "424", "426"]],
            ["(\\d{3})(\\d{0,12})", ["423", "425"]],
            ["([\\x21-\\x22\\x25-\\x2F\\x30-\\x3F\\x41-\\x5A\\x5F\\x61-\\x7A]{0,3})", ["427", "7008"]],
            ["(\\d{0,15})", ["3900", "3901", "3902", "3903", "3904", "3905", "3906", "3907", "3908", "3909", "3920", "3921", "3922", "3923", "3924", "3925", "3926", "3927", "3928", "3929"]],
            ["(\\d{3})(\\d{0,15})", ["3910", "3911", "3912", "3913", "3914", "3915", "3916", "3917", "3918", "3919", "3930", "3931", "3932", "3933", "3934", "3935", "3936", "3937", "3938", "3939"]],
            ["(\\d{4})", ["3940", "3941", "3942", "3943", "8111"]],
            ["(\\d{10})", ["7003"]],
            ["(\\d{0,4})", ["7004"]],
            ["([\\x21-\\x22\\x25-\\x2F\\x30-\\x3F\\x41-\\x5A\\x5F\\x61-\\x7A]{0,12})", ["7005"]],
            ["(\\d{6,12})", ["7007"]],
            ["([\\x21-\\x22\\x25-\\x2F\\x30-\\x3F\\x41-\\x5A\\x5F\\x61-\\x7A]{0,10})", ["7009"]],
            ["([\\x21-\\x22\\x25-\\x2F\\x30-\\x3F\\x41-\\x5A\\x5F\\x61-\\x7A]{0,2})", ["7010"]],
            ["(\\d{3})([\\x21-\\x22\\x25-\\x2F\\x30-\\x3F\\x41-\\x5A\\x5F\\x61-\\x7A]{0,27})", ["7030", "7031", "7032", "7033", "7034", "7035", "7036", "7037", "7038", "7039"]],
            ["([\\x21-\\x22\\x25-\\x2F\\x30-\\x3F\\x41-\\x5A\\x5F\\x61-\\x7A]{2,30})", ["7230", "7231", "7232", "7233", "7234", "7235", "7236", "7237", "7238", "7239"]],
            ["(\\d{14})", ["8001", "02"]],
            ["(\\d{14})([\\x21-\\x22\\x25-\\x2F\\x30-\\x3F\\x41-\\x5A\\x5F\\x61-\\x7A]{0,16})", ["8003"]],
            ["(\\d{14})(\\d{2})(\\d{2})", ["8006", "8026"]],
            ["([\\x21-\\x22\\x25-\\x2F\\x30-\\x3F\\x41-\\x5A\\x5F\\x61-\\x7A]{0,34})", ["8007"]],
            ["(\\d{8})(\\d{0,4})", ["8008"]],
            ["([\\x21-\\x22\\x25-\\x2F\\x30-\\x3F\\x41-\\x5A\\x5F\\x61-\\x7A]{0,50})", ["8009"]],
            ["([\\x23\\x2D\\x2F\\x30-\\x39\\x41-\\x5A]{0,30})", ["8010"]],
            ["(\\d{0,12})", ["8011"]],
            ["(\\d{18})", ["8017", "8018", "00"]],
            ["(\\d{0,10})", ["8019"]],
            ["([\\x21-\\x22\\x25-\\x2F\\x30-\\x3F\\x41-\\x5A\\x5F\\x61-\\x7A]{0,25})", ["8020"]],
            ["([\\x21-\\x22\\x25-\\x2F\\x30-\\x3F\\x41-\\x5A\\x5F\\x61-\\x7A]{0,70})", ["8110", "8112", "8200"]]
        ].map((t => t[1].map((e => [e, t[0]])))).reduce(((t, e) => [...t, ...e]), [])),
        i = {
            253: 13,
            255: 13,
            402: "L",
            410: "L",
            411: "L",
            412: "L",
            413: "L",
            414: "L",
            415: "L",
            416: "L",
            8003: 14,
            8006: 14,
            8017: "L",
            8018: "L",
            8026: 14,
            "00": "L",
            "01": "L",
            "02": "L"
        };
    class o {
        static is(t) {
            return "string" == typeof t && (t.match(/^(https?|HTTPS?):(\/\/((([^\/?#]*)@)?([^\/?#:]*)(:([^\/?#]*))?))?([^?#]*)(((\/(01|8006|8013|8010|414|415|417|8017|8018|255|00|253|401|402|8003|8004)\/)(\d{4}[^\/]+)(\/[^/]+\/[^/]+)?[/]?(\?([^?\n]*))?(#([^\n]*))?))/) || t.match(/^(https?|HTTPS?):(\/\/((([^\/?#]*)@)?([^\/?#:]*)(:([^\/?#]*))?))?([^?#]*)((\/[0-9A-Za-z_-]{10,}$))/))
        }
        static calculateCheckDigit(t, e) {
            let n = 0,
                r = 0;
            for (let o = ("L" === i[t] ? e.length : i[t]) - 2; o >= 0; o--) {
                let t;
                t = n % 2 == 0 ? 3 : 1, r += e.charAt(o) * t, n++
            }
            return (10 - r % 10) % 10
        }
        static verifyCheckDigit(t, e) {
            if (!i[t]) return !0;
            let n = "L" === i[t] ? e.length : i[t],
                r = parseInt(e.charAt(n - 1), 10),
                s = o.calculateCheckDigit(t, e);
            return r === s || (console.log(`Invalid check digit: An invalid check digit was found for the primary identification key (${t})${e}; the correct check digit should be ${s} at position ${n}`), !1)
        }
        static verifySyntax(t, e) {
            return !!new RegExp("^" + r[t] + "$").test(e) || (console.log(`Syntax error: Invalid syntax for value of (${t}): ${e}`), !1)
        }
        static parse(t) {
            let n = [],
                r = new URL(t);
            if ("/" != r.pathname) {
                let t = r.pathname.substr(1).split("/");
                for (; t.length >= 2;) n.push([t.shift(), decodeURIComponent(t.shift())])
            }
            if ("" != r.search) {
                let t = [...new URLSearchParams(r.search.replace(/;/, "&"))];
                for (let [e, r] of t) n.push([e, r])
            }
            let i = [];
            for (let [t, r] of n) {
                let n = !0;
                n &= o.verifySyntax(t, r), n &= o.verifyCheckDigit(t, r), n && ("01" != t && "02" != t || (r = r.padStart(14, "0")), i.push({
                    ai: t,
                    value: r,
                    label: e[t]
                }))
            }
            return i.sort(((t, e) => t.ai.localeCompare(e.ai))), i
        }
    }
    const s = String.fromCharCode(29);
    class a {
        static parse(t) {
            let r = [],
                i = t.split(s);
            for (let t of i)
                for (; t.length;) {
                    let e = t.substr(0, 2);
                    e in n ? (r.push({
                        value: t.substr(0, n[e])
                    }), t = t.substr(n[e])) : (r.push({
                        value: t
                    }), t = "")
                }
            for (let t of r) {
                let n;
                for (let r = 2; r <= 4; r++)
                    if (t.value.substr(0, r) in e) {
                        n = r;
                        break
                    } n && (t.ai = t.value.substr(0, n), t.value = t.value.substr(n), t.label = e[t.ai])
            }
            return r
        }
    }
    var c = {
        UPCA: class {
            static compress(t) {
                return "string" == typeof t && 12 === t.length && /^\d{12}$/.test(t) ? "0000" == t.slice(4, 8) && t[3] >= "0" && t[3] <= "2" ? t.slice(0, 3) + t.slice(8, 11) + t[3] + t[11] : "00000" == t.slice(4, 9) ? t.slice(0, 4) + t.slice(9, 11) + "3" + t[11] : "00000" == t.slice(5, 10) ? t.slice(0, 5) + t.slice(10, 11) + "4" + t[11] : "0000" == t.slice(6, 10) && t[11] >= 5 && t[11] <= 9 ? t.slice(0, 6) + t[10] + t[11] : t : t
            }
        },
        UPCE: class {
            static expand(t) {
                const e = t.substring(1, 7),
                    n = t.charAt(7);
                let r = t.charAt(0);
                switch (e.charAt(5)) {
                    case "0":
                    case "1":
                    case "2":
                        r += e.substring(0, 2) + e.charAt(5) + "0000" + e.substring(2, 5);
                        break;
                    case "3":
                        r += e.substring(0, 3) + "00000" + e.substring(3, 5);
                        break;
                    case "4":
                        r += e.substring(0, 4) + "00000" + e.charAt(4);
                        break;
                    default:
                        r += e.substring(0, 5) + "0000" + +e.charAt(5)
                }
                return r += n, r
            }
        }
    };
    class l {
        static DigitalLink = o;
        static parse(t) {
            let e = [];
            if (t.fnc1 || t.value.includes(String.fromCharCode(29)) ? e = a.parse(t.value) : o.is(t.value) ? e = o.parse(t.value) : t.symbology?.startsWith("gs1-databar") ? e = a.parse(t.value) : "itf" === t.symbology && 14 === t.value.length ? e = [{
                    ai: "01",
                    label: "GTIN",
                    value: t.value
                }] : ["upca", "ean8", "ean13"].includes(t.symbology) && (e = [{
                    ai: "01",
                    label: "GTIN",
                    value: t.value.padStart(14, "0")
                }]), "upce" === t.symbology && (e = [{
                    ai: "01",
                    label: "GTIN",
                    value: c.UPCE.expand(t.value).padStart(14, "0")
                }]), e.length) {
                let t = {
                        elements: e
                    },
                    n = e.find((t => "01" === t.ai));
                return n && (t.gtin = n.value), t
            }
        }
    }
    /**
     * @license
     * Copyright 2019 Google LLC
     * SPDX-License-Identifier: Apache-2.0
     */
    const u = Symbol("Comlink.proxy"),
        h = Symbol("Comlink.endpoint"),
        p = Symbol("Comlink.releaseProxy"),
        d = Symbol("Comlink.finalizer"),
        f = Symbol("Comlink.thrown"),
        v = t => "object" == typeof t && null !== t || "function" == typeof t,
        g = new Map([
            ["proxy", {
                canHandle: t => v(t) && t[u],
                serialize(t) {
                    const {
                        port1: e,
                        port2: n
                    } = new MessageChannel;
                    return m(t, e), [n, [n]]
                },
                deserialize: t => (t.start(), w(t))
            }],
            ["throw", {
                canHandle: t => v(t) && f in t,
                serialize({
                    value: t
                }) {
                    let e;
                    return e = t instanceof Error ? {
                        isError: !0,
                        value: {
                            message: t.message,
                            name: t.name,
                            stack: t.stack
                        }
                    } : {
                        isError: !1,
                        value: t
                    }, [e, []]
                },
                deserialize(t) {
                    if (t.isError) throw Object.assign(new Error(t.value.message), t.value);
                    throw t.value
                }
            }]
        ]);

    function m(t, e = globalThis, n = ["*"]) {
        e.addEventListener("message", (function r(i) {
            if (!i || !i.data) return;
            if (! function(t, e) {
                    for (const n of t) {
                        if (e === n || "*" === n) return !0;
                        if (n instanceof RegExp && n.test(e)) return !0
                    }
                    return !1
                }(n, i.origin)) return void console.warn(`Invalid origin '${i.origin}' for comlink proxy`);
            const {
                id: o,
                type: s,
                path: a
            } = Object.assign({
                path: []
            }, i.data), c = (i.data.argumentList || []).map(A);
            let l;
            try {
                const e = a.slice(0, -1).reduce(((t, e) => t[e]), t),
                    n = a.reduce(((t, e) => t[e]), t);
                switch (s) {
                    case "GET":
                        l = n;
                        break;
                    case "SET":
                        e[a.slice(-1)[0]] = A(i.data.value), l = !0;
                        break;
                    case "APPLY":
                        l = n.apply(e, c);
                        break;
                    case "CONSTRUCT":
                        l = function(t) {
                            return Object.assign(t, {
                                [u]: !0
                            })
                        }(new n(...c));
                        break;
                    case "ENDPOINT": {
                        const {
                            port1: e,
                            port2: n
                        } = new MessageChannel;
                        m(t, n), l = function(t, e) {
                            return $.set(t, e), t
                        }(e, [e])
                    }
                    break;
                    case "RELEASE":
                        l = void 0;
                        break;
                    default:
                        return
                }
            } catch (t) {
                l = {
                    value: t,
                    [f]: 0
                }
            }
            Promise.resolve(l).catch((t => ({
                value: t,
                [f]: 0
            }))).then((n => {
                const [i, a] = S(n);
                e.postMessage(Object.assign(Object.assign({}, i), {
                    id: o
                }), a), "RELEASE" === s && (e.removeEventListener("message", r), y(e), d in t && "function" == typeof t[d] && t[d]())
            })).catch((t => {
                const [n, r] = S({
                    value: new TypeError("Unserializable return value"),
                    [f]: 0
                });
                e.postMessage(Object.assign(Object.assign({}, n), {
                    id: o
                }), r)
            }))
        })), e.start && e.start()
    }

    function y(t) {
        (function(t) {
            return "MessagePort" === t.constructor.name
        })(t) && t.close()
    }

    function w(t, e) {
        return P(t, [], e)
    }

    function b(t) {
        if (t) throw new Error("Proxy has been released and is not useable")
    }

    function x(t) {
        return I(t, {
            type: "RELEASE"
        }).then((() => {
            y(t)
        }))
    }
    const T = new WeakMap,
        E = "FinalizationRegistry" in globalThis && new FinalizationRegistry((t => {
            const e = (T.get(t) || 0) - 1;
            T.set(t, e), 0 === e && x(t)
        }));

    function P(t, e = [], n = function() {}) {
        let r = !1;
        const i = new Proxy(n, {
            get(n, o) {
                if (b(r), o === p) return () => {
                    ! function(t) {
                        E && E.unregister(t)
                    }(i), x(t), r = !0
                };
                if ("then" === o) {
                    if (0 === e.length) return {
                        then: () => i
                    };
                    const n = I(t, {
                        type: "GET",
                        path: e.map((t => t.toString()))
                    }).then(A);
                    return n.then.bind(n)
                }
                return P(t, [...e, o])
            },
            set(n, i, o) {
                b(r);
                const [s, a] = S(o);
                return I(t, {
                    type: "SET",
                    path: [...e, i].map((t => t.toString())),
                    value: s
                }, a).then(A)
            },
            apply(n, i, o) {
                b(r);
                const s = e[e.length - 1];
                if (s === h) return I(t, {
                    type: "ENDPOINT"
                }).then(A);
                if ("bind" === s) return P(t, e.slice(0, -1));
                const [a, c] = C(o);
                return I(t, {
                    type: "APPLY",
                    path: e.map((t => t.toString())),
                    argumentList: a
                }, c).then(A)
            },
            construct(n, i) {
                b(r);
                const [o, s] = C(i);
                return I(t, {
                    type: "CONSTRUCT",
                    path: e.map((t => t.toString())),
                    argumentList: o
                }, s).then(A)
            }
        });
        return function(t, e) {
            const n = (T.get(e) || 0) + 1;
            T.set(e, n), E && E.register(t, e, t)
        }(i, t), i
    }

    function C(t) {
        const e = t.map(S);
        return [e.map((t => t[0])), (n = e.map((t => t[1])), Array.prototype.concat.apply([], n))];
        var n
    }
    const $ = new WeakMap;

    function S(t) {
        for (const [e, n] of g)
            if (n.canHandle(t)) {
                const [r, i] = n.serialize(t);
                return [{
                    type: "HANDLER",
                    name: e,
                    value: r
                }, i]
            } return [{
            type: "RAW",
            value: t
        }, $.get(t) || []]
    }

    function A(t) {
        switch (t.type) {
            case "HANDLER":
                return g.get(t.name).deserialize(t.value);
            case "RAW":
                return t.value
        }
    }

    function I(t, e, n) {
        return new Promise((r => {
            const i = new Array(4).fill(0).map((() => Math.floor(Math.random() * Number.MAX_SAFE_INTEGER).toString(16))).join("-");
            t.addEventListener("message", (function e(n) {
                n.data && n.data.id && n.data.id === i && (t.removeEventListener("message", e), r(n.data))
            })), t.start && t.start(), t.postMessage(Object.assign({
                id: i
            }, e), n)
        }))
    }
    const _ = ["Aztec", "Codabar", "Code128", "Code39", "Code93", "DataBar", "DataBarExpanded", "DataMatrix", "DXFilmEdge", "EAN-13", "EAN-8", "ITF", "Linear-Codes", "Matrix-Codes", "MaxiCode", "MicroQRCode", "None", "PDF417", "QRCode", "rMQRCode", "UPC-A", "UPC-E"];

    function O(t) {
        return t.join("|")
    }

    function R(t) {
        const e = k(t);
        let n = 0,
            r = _.length - 1;
        for (; n <= r;) {
            const t = Math.floor((n + r) / 2),
                i = _[t],
                o = k(i);
            if (o === e) return i;
            o < e ? n = t + 1 : r = t - 1
        }
        return "None"
    }

    function k(t) {
        return t.toLowerCase().replace(/_-\[\]/g, "")
    }

    function D(t, e) {
        return t.Binarizer[e]
    }

    function M(t, e) {
        return t.CharacterSet[e]
    }
    const F = ["Text", "Binary", "Mixed", "GS1", "ISO15434", "UnknownECI"];

    function L(t) {
        return F[t.value]
    }

    function j(t, e) {
        return t.EanAddOnSymbol[e]
    }

    function N(t, e) {
        return t.TextMode[e]
    }
    const U = {
        formats: [],
        tryHarder: !0,
        tryRotate: !0,
        tryInvert: !0,
        tryDownscale: !0,
        binarizer: "LocalAverage",
        isPure: !1,
        downscaleFactor: 3,
        downscaleThreshold: 500,
        minLineCount: 2,
        maxNumberOfSymbols: 255,
        tryCode39ExtendedMode: !1,
        validateCode39CheckSum: !1,
        validateITFCheckSum: !1,
        returnCodabarStartEnd: !1,
        returnErrors: !1,
        eanAddOnSymbol: "Read",
        textMode: "Plain",
        characterSet: "Unknown"
    };

    function H(t) {
        return {
            ...t,
            format: R(t.format),
            eccLevel: t.eccLevel,
            contentType: L(t.contentType)
        }
    }
    const W = {
        locateFile: (t, e) => {
            const n = t.match(/_(.+?)\.wasm$/);
            return n ? `https://fastly.jsdelivr.net/npm/zxing-wasm@2.1.0/dist/${n[1]}/${t}` : e + t
        }
    };
    let G = new WeakMap;
    async function V(t, e, n = U) {
        const r = {
                ...U,
                ...n
            },
            i = await
        function(t, e) {
            var n;
            const r = G.get(t);
            if (null != r && r.modulePromise && (void 0 === e || Object.is(e, r.moduleOverrides))) return r.modulePromise;
            const i = null != (n = null != e ? e : null == r ? void 0 : r.moduleOverrides) ? n : W,
                o = t({
                    ...i
                });
            return G.set(t, {
                moduleOverrides: i,
                modulePromise: o
            }), o
        }(t), {
            data: o,
            width: s,
            height: a,
            data: {
                byteLength: c
            }
        } = e, l = i._malloc(c);
        i.HEAPU8.set(o, l);
        const u = i.readBarcodesFromPixmap(l, s, a, function(t, e) {
            return {
                ...e,
                formats: O(e.formats),
                binarizer: D(t, e.binarizer),
                eanAddOnSymbol: j(t, e.eanAddOnSymbol),
                textMode: N(t, e.textMode),
                characterSet: M(t, e.characterSet)
            }
        }(i, r));
        i._free(l);
        const h = [];
        for (let t = 0; t < u.size(); ++t) h.push(H(u.get(t)));
        return h
    }
    var z, B, Y = (B = typeof document < "u" && "SCRIPT" === (null == (z = document.currentScript) ? void 0 : z.tagName.toUpperCase()) ? document.currentScript.src : void 0, function(t = {}) {
        var e, n, r = t,
            i = new Promise(((t, r) => {
                e = t, n = r
            })),
            o = "object" == typeof window,
            s = typeof Bun < "u",
            a = "function" == typeof importScripts;
        "object" == typeof process && "object" == typeof process.versions && "string" == typeof process.versions.node && process.type;
        var c, l, u, h = Object.assign({}, r),
            p = "./this.program",
            d = "";
        (o || a || s) && (a ? d = self.location.href : typeof document < "u" && "SCRIPT" === (null === (u = document.currentScript) || void 0 === u ? void 0 : u.tagName.toUpperCase()) && (d = document.currentScript.src), B && (d = B), d = d.startsWith("blob:") ? "" : d.substr(0, d.replace(/[?#].*/, "").lastIndexOf("/") + 1), a && (l = t => {
            var e = new XMLHttpRequest;
            return e.open("GET", t, !1), e.responseType = "arraybuffer", e.send(null), new Uint8Array(e.response)
        }), c = t => fetch(t, {
            credentials: "same-origin"
        }).then((t => t.ok ? t.arrayBuffer() : Promise.reject(new Error(t.status + " : " + t.url)))));
        var f = r.print || console.log.bind(console),
            v = r.printErr || console.error.bind(console);
        Object.assign(r, h), h = null, r.arguments && r.arguments, r.thisProgram && (p = r.thisProgram);
        var g, m, y, w, b, x, T, E, P, C = r.wasmBinary,
            $ = !1;

        function S() {
            var t = g.buffer;
            r.HEAP8 = m = new Int8Array(t), r.HEAP16 = w = new Int16Array(t), r.HEAPU8 = y = new Uint8Array(t), r.HEAPU16 = b = new Uint16Array(t), r.HEAP32 = x = new Int32Array(t), r.HEAPU32 = T = new Uint32Array(t), r.HEAPF32 = E = new Float32Array(t), r.HEAPF64 = P = new Float64Array(t)
        }
        var A = [],
            I = [],
            _ = [],
            O = 0,
            R = null;

        function k(t) {
            var e;
            null === (e = r.onAbort) || void 0 === e || e.call(r, t), v(t = "Aborted(" + t + ")"), $ = !0, t += ". Build with -sASSERTIONS for more info.";
            var i = new WebAssembly.RuntimeError(t);
            throw n(i), i
        }
        var D, M = t => t.startsWith("data:application/octet-stream;base64,");

        function F() {
            var t = "zxing_reader.wasm";
            return M(t) ? t : function(t) {
                return r.locateFile ? r.locateFile(t, d) : d + t
            }(t)
        }

        function L(t) {
            if (t == D && C) return new Uint8Array(C);
            if (l) return l(t);
            throw "both async and sync fetching of the wasm failed"
        }

        function j(t, e, n) {
            return function(t) {
                return C ? Promise.resolve().then((() => L(t))) : c(t).then((t => new Uint8Array(t)), (() => L(t)))
            }(t).then((t => WebAssembly.instantiate(t, e))).then(n, (t => {
                v(`failed to asynchronously prepare wasm: ${t}`), k(t)
            }))
        }
        var N = t => {
            for (; t.length > 0;) t.shift()(r)
        };
        r.noExitRuntime;
        var U = t => Ue(t),
            H = () => He(),
            W = [],
            G = 0,
            V = 0;
        class z {
            constructor(t) {
                this.excPtr = t, this.ptr = t - 24
            }
            set_type(t) {
                T[this.ptr + 4 >> 2] = t
            }
            get_type() {
                return T[this.ptr + 4 >> 2]
            }
            set_destructor(t) {
                T[this.ptr + 8 >> 2] = t
            }
            get_destructor() {
                return T[this.ptr + 8 >> 2]
            }
            set_caught(t) {
                t = t ? 1 : 0, m[this.ptr + 12] = t
            }
            get_caught() {
                return 0 != m[this.ptr + 12]
            }
            set_rethrown(t) {
                t = t ? 1 : 0, m[this.ptr + 13] = t
            }
            get_rethrown() {
                return 0 != m[this.ptr + 13]
            }
            init(t, e) {
                this.set_adjusted_ptr(0), this.set_type(t), this.set_destructor(e)
            }
            set_adjusted_ptr(t) {
                T[this.ptr + 16 >> 2] = t
            }
            get_adjusted_ptr() {
                return T[this.ptr + 16 >> 2]
            }
        }
        var Y = t => Ne(t),
            X = t => {
                var e = V;
                if (!e) return Y(0), 0;
                var n = new z(e);
                n.set_adjusted_ptr(e);
                var r = n.get_type();
                if (!r) return Y(0), e;
                for (var i of t) {
                    if (0 === i || i === r) break;
                    var o = n.ptr + 16;
                    if (Ve(i, r, o)) return Y(i), e
                }
                return Y(r), e
            },
            q = {},
            K = t => {
                for (; t.length;) {
                    var e = t.pop();
                    t.pop()(e)
                }
            };

        function Q(t) {
            return this.fromWireType(T[t >> 2])
        }
        var Z, J, tt, et = {},
            nt = {},
            rt = {},
            it = t => {
                throw new Z(t)
            },
            ot = (t, e, n) => {
                function r(e) {
                    var r = n(e);
                    r.length !== t.length && it("Mismatched type converter count");
                    for (var i = 0; i < t.length; ++i) ct(t[i], r[i])
                }
                t.forEach((t => rt[t] = e));
                var i = new Array(e.length),
                    o = [],
                    s = 0;
                e.forEach(((t, e) => {
                    nt.hasOwnProperty(t) ? i[e] = nt[t] : (o.push(t), et.hasOwnProperty(t) || (et[t] = []), et[t].push((() => {
                        i[e] = nt[t], ++s === o.length && r(i)
                    })))
                })), 0 === o.length && r(i)
            },
            st = t => {
                for (var e = "", n = t; y[n];) e += J[y[n++]];
                return e
            },
            at = t => {
                throw new tt(t)
            };

        function ct(t, e) {
            return function(t, e) {
                let n = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : {};
                var r = e.name;
                if (t || at(`type "${r}" must have a positive integer typeid pointer`), nt.hasOwnProperty(t)) {
                    if (n.ignoreDuplicateRegistrations) return;
                    at(`Cannot register type '${r}' twice`)
                }
                if (nt[t] = e, delete rt[t], et.hasOwnProperty(t)) {
                    var i = et[t];
                    delete et[t], i.forEach((t => t()))
                }
            }(t, e, arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : {})
        }
        var lt, ut = 8,
            ht = t => ({
                count: t.count,
                deleteScheduled: t.deleteScheduled,
                preservePointerOnDelete: t.preservePointerOnDelete,
                ptr: t.ptr,
                ptrType: t.ptrType,
                smartPtr: t.smartPtr,
                smartPtrType: t.smartPtrType
            }),
            pt = t => {
                at(t.$$.ptrType.registeredClass.name + " instance already deleted")
            },
            dt = !1,
            ft = t => {},
            vt = t => {
                t.count.value -= 1, 0 === t.count.value && (t => {
                    t.smartPtr ? t.smartPtrType.rawDestructor(t.smartPtr) : t.ptrType.registeredClass.rawDestructor(t.ptr)
                })(t)
            },
            gt = (t, e, n) => {
                if (e === n) return t;
                if (void 0 === n.baseClass) return null;
                var r = gt(t, e, n.baseClass);
                return null === r ? null : n.downcast(r)
            },
            mt = {},
            yt = () => Object.keys(Et).length,
            wt = () => {
                var t = [];
                for (var e in Et) Et.hasOwnProperty(e) && t.push(Et[e]);
                return t
            },
            bt = [],
            xt = () => {
                for (; bt.length;) {
                    var t = bt.pop();
                    t.$$.deleteScheduled = !1, t.delete()
                }
            },
            Tt = t => {
                lt = t, bt.length && lt && lt(xt)
            },
            Et = {},
            Pt = (t, e) => (e = ((t, e) => {
                for (void 0 === e && at("ptr should not be undefined"); t.baseClass;) e = t.upcast(e), t = t.baseClass;
                return e
            })(t, e), Et[e]),
            Ct = (t, e) => ((!e.ptrType || !e.ptr) && it("makeClassHandle requires ptr and ptrType"), !!e.smartPtrType != !!e.smartPtr && it("Both smartPtrType and smartPtr must be specified"), e.count = {
                value: 1
            }, St(Object.create(t, {
                $$: {
                    value: e,
                    writable: !0
                }
            })));

        function $t(t) {
            var e = this.getPointee(t);
            if (!e) return this.destructor(t), null;
            var n = Pt(this.registeredClass, e);
            if (void 0 !== n) {
                if (0 === n.$$.count.value) return n.$$.ptr = e, n.$$.smartPtr = t, n.clone();
                var r = n.clone();
                return this.destructor(t), r
            }

            function i() {
                return this.isSmartPointer ? Ct(this.registeredClass.instancePrototype, {
                    ptrType: this.pointeeType,
                    ptr: e,
                    smartPtrType: this,
                    smartPtr: t
                }) : Ct(this.registeredClass.instancePrototype, {
                    ptrType: this,
                    ptr: t
                })
            }
            var o, s = this.registeredClass.getActualType(e),
                a = mt[s];
            if (!a) return i.call(this);
            o = this.isConst ? a.constPointerType : a.pointerType;
            var c = gt(e, this.registeredClass, o.registeredClass);
            return null === c ? i.call(this) : this.isSmartPointer ? Ct(o.registeredClass.instancePrototype, {
                ptrType: o,
                ptr: c,
                smartPtrType: this,
                smartPtr: t
            }) : Ct(o.registeredClass.instancePrototype, {
                ptrType: o,
                ptr: c
            })
        }
        var St = t => typeof FinalizationRegistry > "u" ? (St = t => t, t) : (dt = new FinalizationRegistry((t => {
            vt(t.$$)
        })), ft = t => dt.unregister(t), (St = t => {
            var e = t.$$;
            if (e.smartPtr) {
                var n = {
                    $$: e
                };
                dt.register(t, n, t)
            }
            return t
        })(t));

        function At() {}
        var It = (t, e) => Object.defineProperty(e, "name", {
                value: t
            }),
            _t = (t, e, n) => {
                if (void 0 === t[e].overloadTable) {
                    var r = t[e];
                    t[e] = function() {
                        for (var r = arguments.length, i = new Array(r), o = 0; o < r; o++) i[o] = arguments[o];
                        return t[e].overloadTable.hasOwnProperty(i.length) || at(`Function '${n}' called with an invalid number of arguments (${i.length}) - expects one of (${t[e].overloadTable})!`), t[e].overloadTable[i.length].apply(this, i)
                    }, t[e].overloadTable = [], t[e].overloadTable[r.argCount] = r
                }
            },
            Ot = (t, e, n) => {
                r.hasOwnProperty(t) ? ((void 0 === n || void 0 !== r[t].overloadTable && void 0 !== r[t].overloadTable[n]) && at(`Cannot register public name '${t}' twice`), _t(r, t, t), r.hasOwnProperty(n) && at(`Cannot register multiple overloads of a function with the same number of arguments (${n})!`), r[t].overloadTable[n] = e) : (r[t] = e, void 0 !== n && (r[t].numArguments = n))
            };

        function Rt(t, e, n, r, i, o, s, a) {
            this.name = t, this.constructor = e, this.instancePrototype = n, this.rawDestructor = r, this.baseClass = i, this.getActualType = o, this.upcast = s, this.downcast = a, this.pureVirtualFunctions = []
        }
        var kt = (t, e, n) => {
            for (; e !== n;) e.upcast || at(`Expected null or instance of ${n.name}, got an instance of ${e.name}`), t = e.upcast(t), e = e.baseClass;
            return t
        };

        function Dt(t, e) {
            if (null === e) return this.isReference && at(`null is not a valid ${this.name}`), 0;
            e.$$ || at(`Cannot pass "${ae(e)}" as a ${this.name}`), e.$$.ptr || at(`Cannot pass deleted object as a pointer of type ${this.name}`);
            var n = e.$$.ptrType.registeredClass;
            return kt(e.$$.ptr, n, this.registeredClass)
        }

        function Mt(t, e) {
            var n;
            if (null === e) return this.isReference && at(`null is not a valid ${this.name}`), this.isSmartPointer ? (n = this.rawConstructor(), null !== t && t.push(this.rawDestructor, n), n) : 0;
            (!e || !e.$$) && at(`Cannot pass "${ae(e)}" as a ${this.name}`), e.$$.ptr || at(`Cannot pass deleted object as a pointer of type ${this.name}`), !this.isConst && e.$$.ptrType.isConst && at(`Cannot convert argument of type ${e.$$.smartPtrType?e.$$.smartPtrType.name:e.$$.ptrType.name} to parameter type ${this.name}`);
            var r = e.$$.ptrType.registeredClass;
            if (n = kt(e.$$.ptr, r, this.registeredClass), this.isSmartPointer) switch (void 0 === e.$$.smartPtr && at("Passing raw pointer to smart pointer is illegal"), this.sharingPolicy) {
                case 0:
                    e.$$.smartPtrType === this ? n = e.$$.smartPtr : at(`Cannot convert argument of type ${e.$$.smartPtrType?e.$$.smartPtrType.name:e.$$.ptrType.name} to parameter type ${this.name}`);
                    break;
                case 1:
                    n = e.$$.smartPtr;
                    break;
                case 2:
                    if (e.$$.smartPtrType === this) n = e.$$.smartPtr;
                    else {
                        var i = e.clone();
                        n = this.rawShare(n, re.toHandle((() => i.delete()))), null !== t && t.push(this.rawDestructor, n)
                    }
                    break;
                default:
                    at("Unsupporting sharing policy")
            }
            return n
        }

        function Ft(t, e) {
            if (null === e) return this.isReference && at(`null is not a valid ${this.name}`), 0;
            e.$$ || at(`Cannot pass "${ae(e)}" as a ${this.name}`), e.$$.ptr || at(`Cannot pass deleted object as a pointer of type ${this.name}`), e.$$.ptrType.isConst && at(`Cannot convert argument of type ${e.$$.ptrType.name} to parameter type ${this.name}`);
            var n = e.$$.ptrType.registeredClass;
            return kt(e.$$.ptr, n, this.registeredClass)
        }

        function Lt(t, e, n, r, i, o, s, a, c, l, u) {
            this.name = t, this.registeredClass = e, this.isReference = n, this.isConst = r, this.isSmartPointer = i, this.pointeeType = o, this.sharingPolicy = s, this.rawGetPointee = a, this.rawConstructor = c, this.rawShare = l, this.rawDestructor = u, i || void 0 !== e.baseClass ? this.toWireType = Mt : r ? (this.toWireType = Dt, this.destructorFunction = null) : (this.toWireType = Ft, this.destructorFunction = null)
        }
        var jt, Nt, Ut = (t, e, n) => {
                r.hasOwnProperty(t) || it("Replacing nonexistent public symbol"), void 0 !== r[t].overloadTable && void 0 !== n ? r[t].overloadTable[n] = e : (r[t] = e, r[t].argCount = n)
            },
            Ht = [],
            Wt = t => {
                var e = Ht[t];
                return e || (t >= Ht.length && (Ht.length = t + 1), Ht[t] = e = jt.get(t)), e
            },
            Gt = function(t, e) {
                let n = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : [];
                return t.includes("j") ? ((t, e, n) => (t = t.replace(/p/g, "i"), (0, r["dynCall_" + t])(e, ...n)))(t, e, n) : Wt(e)(...n)
            },
            Vt = (t, e) => {
                var n = (t = st(t)).includes("j") ? ((t, e) => function() {
                    for (var n = arguments.length, r = new Array(n), i = 0; i < n; i++) r[i] = arguments[i];
                    return Gt(t, e, r)
                })(t, e) : Wt(e);
                return "function" != typeof n && at(`unknown function pointer with signature ${t}: ${e}`), n
            },
            zt = t => {
                var e = De(t),
                    n = st(e);
                return Me(e), n
            },
            Bt = (t, e) => {
                var n = [],
                    r = {};
                throw e.forEach((function t(e) {
                    if (!r[e] && !nt[e]) {
                        if (rt[e]) return void rt[e].forEach(t);
                        n.push(e), r[e] = !0
                    }
                })), new Nt(`${t}: ` + n.map(zt).join([", "]))
            },
            Yt = (t, e) => {
                for (var n = [], r = 0; r < t; r++) n.push(T[e + 4 * r >> 2]);
                return n
            };

        function Xt(t, e, n, r, i, o) {
            var s = e.length;
            s < 2 && at("argTypes array size mismatch! Must at least get return value and 'this' types!");
            var a = null !== e[1] && null !== n,
                c = function(t) {
                    for (var e = 1; e < t.length; ++e)
                        if (null !== t[e] && void 0 === t[e].destructorFunction) return !0;
                    return !1
                }(e),
                l = "void" !== e[0].name,
                u = s - 2,
                h = new Array(u),
                p = [],
                d = [];
            return It(t, (function() {
                var t;
                d.length = 0, p.length = a ? 2 : 1, p[0] = i, a && (t = e[1].toWireType(d, this), p[1] = t);
                for (var n = 0; n < u; ++n) h[n] = e[n + 2].toWireType(d, n < 0 || arguments.length <= n ? void 0 : arguments[n]), p.push(h[n]);
                return function(n) {
                    if (c) K(d);
                    else
                        for (var r = a ? 1 : 2; r < e.length; r++) {
                            var i = 1 === r ? t : h[r - 2];
                            null !== e[r].destructorFunction && e[r].destructorFunction(i)
                        }
                    if (l) return e[0].fromWireType(n)
                }(r(...p))
            }))
        }
        var qt, Kt, Qt, Zt = t => {
                const e = (t = t.trim()).indexOf("(");
                return -1 !== e ? t.substr(0, e) : t
            },
            Jt = [],
            te = [],
            ee = t => {
                t > 9 && 0 == --te[t + 1] && (te[t] = void 0, Jt.push(t))
            },
            ne = () => te.length / 2 - 5 - Jt.length,
            re = {
                toValue: t => (t || at("Cannot use deleted val. handle = " + t), te[t]),
                toHandle: t => {
                    switch (t) {
                        case void 0:
                            return 2;
                        case null:
                            return 4;
                        case !0:
                            return 6;
                        case !1:
                            return 8;
                        default: {
                            const e = Jt.pop() || te.length;
                            return te[e] = t, te[e + 1] = 1, e
                        }
                    }
                }
            },
            ie = {
                name: "emscripten::val",
                fromWireType: t => {
                    var e = re.toValue(t);
                    return ee(t), e
                },
                toWireType: (t, e) => re.toHandle(e),
                argPackAdvance: ut,
                readValueFromPointer: Q,
                destructorFunction: null
            },
            oe = (t, e, n) => {
                switch (e) {
                    case 1:
                        return n ? function(t) {
                            return this.fromWireType(m[t])
                        } : function(t) {
                            return this.fromWireType(y[t])
                        };
                    case 2:
                        return n ? function(t) {
                            return this.fromWireType(w[t >> 1])
                        } : function(t) {
                            return this.fromWireType(b[t >> 1])
                        };
                    case 4:
                        return n ? function(t) {
                            return this.fromWireType(x[t >> 2])
                        } : function(t) {
                            return this.fromWireType(T[t >> 2])
                        };
                    default:
                        throw new TypeError(`invalid integer width (${e}): ${t}`)
                }
            },
            se = (t, e) => {
                var n = nt[t];
                return void 0 === n && at(`${e} has unknown type ${zt(t)}`), n
            },
            ae = t => {
                if (null === t) return "null";
                var e = typeof t;
                return "object" === e || "array" === e || "function" === e ? t.toString() : "" + t
            },
            ce = (t, e) => {
                switch (e) {
                    case 4:
                        return function(t) {
                            return this.fromWireType(E[t >> 2])
                        };
                    case 8:
                        return function(t) {
                            return this.fromWireType(P[t >> 3])
                        };
                    default:
                        throw new TypeError(`invalid float width (${e}): ${t}`)
                }
            },
            le = (t, e, n) => {
                switch (e) {
                    case 1:
                        return n ? t => m[t] : t => y[t];
                    case 2:
                        return n ? t => w[t >> 1] : t => b[t >> 1];
                    case 4:
                        return n ? t => x[t >> 2] : t => T[t >> 2];
                    default:
                        throw new TypeError(`invalid integer width (${e}): ${t}`)
                }
            },
            ue = Object.assign({
                optional: !0
            }, ie),
            he = (t, e, n) => ((t, e, n, r) => {
                if (!(r > 0)) return 0;
                for (var i = n, o = n + r - 1, s = 0; s < t.length; ++s) {
                    var a = t.charCodeAt(s);
                    if (a >= 55296 && a <= 57343 && (a = 65536 + ((1023 & a) << 10) | 1023 & t.charCodeAt(++s)), a <= 127) {
                        if (n >= o) break;
                        e[n++] = a
                    } else if (a <= 2047) {
                        if (n + 1 >= o) break;
                        e[n++] = 192 | a >> 6, e[n++] = 128 | 63 & a
                    } else if (a <= 65535) {
                        if (n + 2 >= o) break;
                        e[n++] = 224 | a >> 12, e[n++] = 128 | a >> 6 & 63, e[n++] = 128 | 63 & a
                    } else {
                        if (n + 3 >= o) break;
                        e[n++] = 240 | a >> 18, e[n++] = 128 | a >> 12 & 63, e[n++] = 128 | a >> 6 & 63, e[n++] = 128 | 63 & a
                    }
                }
                return e[n] = 0, n - i
            })(t, y, e, n),
            pe = typeof TextDecoder < "u" ? new TextDecoder : void 0,
            de = (t, e, n) => {
                for (var r = e + n, i = e; t[i] && !(i >= r);) ++i;
                if (i - e > 16 && t.buffer && pe) return pe.decode(t.subarray(e, i));
                for (var o = ""; e < i;) {
                    var s = t[e++];
                    if (128 & s) {
                        var a = 63 & t[e++];
                        if (192 != (224 & s)) {
                            var c = 63 & t[e++];
                            if ((s = 224 == (240 & s) ? (15 & s) << 12 | a << 6 | c : (7 & s) << 18 | a << 12 | c << 6 | 63 & t[e++]) < 65536) o += String.fromCharCode(s);
                            else {
                                var l = s - 65536;
                                o += String.fromCharCode(55296 | l >> 10, 56320 | 1023 & l)
                            }
                        } else o += String.fromCharCode((31 & s) << 6 | a)
                    } else o += String.fromCharCode(s)
                }
                return o
            },
            fe = (t, e) => t ? de(y, t, e) : "",
            ve = typeof TextDecoder < "u" ? new TextDecoder("utf-16le") : void 0,
            ge = (t, e) => {
                for (var n = t, r = n >> 1, i = r + e / 2; !(r >= i) && b[r];) ++r;
                if ((n = r << 1) - t > 32 && ve) return ve.decode(y.subarray(t, n));
                for (var o = "", s = 0; !(s >= e / 2); ++s) {
                    var a = w[t + 2 * s >> 1];
                    if (0 == a) break;
                    o += String.fromCharCode(a)
                }
                return o
            },
            me = (t, e, n) => {
                var r;
                if (null !== (r = n) && void 0 !== r || (n = 2147483647), n < 2) return 0;
                for (var i = e, o = (n -= 2) < 2 * t.length ? n / 2 : t.length, s = 0; s < o; ++s) {
                    var a = t.charCodeAt(s);
                    w[e >> 1] = a, e += 2
                }
                return w[e >> 1] = 0, e - i
            },
            ye = t => 2 * t.length,
            we = (t, e) => {
                for (var n = 0, r = ""; !(n >= e / 4);) {
                    var i = x[t + 4 * n >> 2];
                    if (0 == i) break;
                    if (++n, i >= 65536) {
                        var o = i - 65536;
                        r += String.fromCharCode(55296 | o >> 10, 56320 | 1023 & o)
                    } else r += String.fromCharCode(i)
                }
                return r
            },
            be = (t, e, n) => {
                var r;
                if (null !== (r = n) && void 0 !== r || (n = 2147483647), n < 4) return 0;
                for (var i = e, o = i + n - 4, s = 0; s < t.length; ++s) {
                    var a = t.charCodeAt(s);
                    if (a >= 55296 && a <= 57343 && (a = 65536 + ((1023 & a) << 10) | 1023 & t.charCodeAt(++s)), x[e >> 2] = a, (e += 4) + 4 > o) break
                }
                return x[e >> 2] = 0, e - i
            },
            xe = t => {
                for (var e = 0, n = 0; n < t.length; ++n) {
                    var r = t.charCodeAt(n);
                    r >= 55296 && r <= 57343 && ++n, e += 4
                }
                return e
            },
            Te = [],
            Ee = {},
            Pe = () => {
                if ("object" == typeof globalThis) return globalThis;

                function t(t) {
                    t.$$$embind_global$$$ = t;
                    var e = "object" == typeof $$$embind_global$$$ && t.$$$embind_global$$$ == t;
                    return e || delete t.$$$embind_global$$$, e
                }
                if ("object" == typeof $$$embind_global$$$ || ("object" == typeof global && t(global) ? $$$embind_global$$$ = global : "object" == typeof self && t(self) && ($$$embind_global$$$ = self), "object" == typeof $$$embind_global$$$)) return $$$embind_global$$$;
                throw Error("unable to get global object.")
            },
            Ce = Reflect.construct,
            $e = (t, e) => Math.ceil(t / e) * e,
            Se = t => {
                var e = (t - g.buffer.byteLength + 65535) / 65536;
                try {
                    return g.grow(e), S(), 1
                } catch {}
            },
            Ae = {},
            Ie = () => {
                if (!Ie.strings) {
                    var t = {
                        USER: "web_user",
                        LOGNAME: "web_user",
                        PATH: "/",
                        PWD: "/",
                        HOME: "/home/web_user",
                        LANG: ("object" == typeof navigator && navigator.languages && navigator.languages[0] || "C").replace("-", "_") + ".UTF-8",
                        _: p || "./this.program"
                    };
                    for (var e in Ae) void 0 === Ae[e] ? delete t[e] : t[e] = Ae[e];
                    var n = [];
                    for (var e in t) n.push(`${e}=${t[e]}`);
                    Ie.strings = n
                }
                return Ie.strings
            },
            _e = [null, [],
                []
            ],
            Oe = (t, e) => {
                var n = _e[t];
                0 === e || 10 === e ? ((1 === t ? f : v)(de(n, 0)), n.length = 0) : n.push(e)
            };
        Z = r.InternalError = class extends Error {
            constructor(t) {
                super(t), this.name = "InternalError"
            }
        }, (() => {
            for (var t = new Array(256), e = 0; e < 256; ++e) t[e] = String.fromCharCode(e);
            J = t
        })(), tt = r.BindingError = class extends Error {
            constructor(t) {
                super(t), this.name = "BindingError"
            }
        }, Object.assign(At.prototype, {
            isAliasOf(t) {
                if (!(this instanceof At && t instanceof At)) return !1;
                var e = this.$$.ptrType.registeredClass,
                    n = this.$$.ptr;
                t.$$ = t.$$;
                for (var r = t.$$.ptrType.registeredClass, i = t.$$.ptr; e.baseClass;) n = e.upcast(n), e = e.baseClass;
                for (; r.baseClass;) i = r.upcast(i), r = r.baseClass;
                return e === r && n === i
            },
            clone() {
                if (this.$$.ptr || pt(this), this.$$.preservePointerOnDelete) return this.$$.count.value += 1, this;
                var t = St(Object.create(Object.getPrototypeOf(this), {
                    $$: {
                        value: ht(this.$$)
                    }
                }));
                return t.$$.count.value += 1, t.$$.deleteScheduled = !1, t
            },
            delete() {
                this.$$.ptr || pt(this), this.$$.deleteScheduled && !this.$$.preservePointerOnDelete && at("Object already scheduled for deletion"), ft(this), vt(this.$$), this.$$.preservePointerOnDelete || (this.$$.smartPtr = void 0, this.$$.ptr = void 0)
            },
            isDeleted() {
                return !this.$$.ptr
            },
            deleteLater() {
                return this.$$.ptr || pt(this), this.$$.deleteScheduled && !this.$$.preservePointerOnDelete && at("Object already scheduled for deletion"), bt.push(this), 1 === bt.length && lt && lt(xt), this.$$.deleteScheduled = !0, this
            }
        }), r.getInheritedInstanceCount = yt, r.getLiveInheritedInstances = wt, r.flushPendingDeletes = xt, r.setDelayFunction = Tt, Object.assign(Lt.prototype, {
            getPointee(t) {
                return this.rawGetPointee && (t = this.rawGetPointee(t)), t
            },
            destructor(t) {
                var e;
                null === (e = this.rawDestructor) || void 0 === e || e.call(this, t)
            },
            argPackAdvance: ut,
            readValueFromPointer: Q,
            fromWireType: $t
        }), Nt = r.UnboundTypeError = (qt = Error, (Qt = It(Kt = "UnboundTypeError", (function(t) {
            this.name = Kt, this.message = t;
            var e = new Error(t).stack;
            void 0 !== e && (this.stack = this.toString() + "\n" + e.replace(/^Error(:[^\n]*)?\n/, ""))
        }))).prototype = Object.create(qt.prototype), Qt.prototype.constructor = Qt, Qt.prototype.toString = function() {
            return void 0 === this.message ? this.name : `${this.name}: ${this.message}`
        }, Qt), te.push(0, 1, void 0, 1, null, 1, !0, 1, !1, 1), r.count_emval_handles = ne;
        var Re = {
                t: t => {
                    var e = new z(t);
                    return e.get_caught() || (e.set_caught(!0), G--), e.set_rethrown(!1), W.push(e), Ge(t), Le(t)
                },
                x: () => {
                    je(0, 0);
                    var t = W.pop();
                    We(t.excPtr), V = 0
                },
                a: () => X([]),
                j: t => X([t]),
                k: (t, e) => X([t, e]),
                O: () => {
                    var t = W.pop();
                    t || k("no exception to throw");
                    var e = t.excPtr;
                    throw t.get_rethrown() || (W.push(t), t.set_rethrown(!0), t.set_caught(!1), G++), V = e
                },
                q: (t, e, n) => {
                    throw new z(t).init(e, n), G++, V = t
                },
                ga: () => G,
                d: t => {
                    throw V || (V = t), V
                },
                ca: () => {
                    k("")
                },
                va: t => {
                    var e = q[t];
                    delete q[t];
                    var n = e.rawConstructor,
                        r = e.rawDestructor,
                        i = e.fields,
                        o = i.map((t => t.getterReturnType)).concat(i.map((t => t.setterArgumentType)));
                    ot([t], o, (t => {
                        var o = {};
                        return i.forEach(((e, n) => {
                            var r = e.fieldName,
                                s = t[n],
                                a = e.getter,
                                c = e.getterContext,
                                l = t[n + i.length],
                                u = e.setter,
                                h = e.setterContext;
                            o[r] = {
                                read: t => s.fromWireType(a(c, t)),
                                write: (t, e) => {
                                    var n = [];
                                    u(h, t, l.toWireType(n, e)), K(n)
                                }
                            }
                        })), [{
                            name: e.name,
                            fromWireType: t => {
                                var e = {};
                                for (var n in o) e[n] = o[n].read(t);
                                return r(t), e
                            },
                            toWireType: (t, e) => {
                                for (var i in o)
                                    if (!(i in e)) throw new TypeError(`Missing field: "${i}"`);
                                var s = n();
                                for (i in o) o[i].write(s, e[i]);
                                return null !== t && t.push(r, s), s
                            },
                            argPackAdvance: ut,
                            readValueFromPointer: Q,
                            destructorFunction: r
                        }]
                    }))
                },
                ba: (t, e, n, r, i) => {},
                pa: (t, e, n, r) => {
                    ct(t, {
                        name: e = st(e),
                        fromWireType: function(t) {
                            return !!t
                        },
                        toWireType: function(t, e) {
                            return e ? n : r
                        },
                        argPackAdvance: ut,
                        readValueFromPointer: function(t) {
                            return this.fromWireType(y[t])
                        },
                        destructorFunction: null
                    })
                },
                ta: (t, e, n, r, i, o, s, a, c, l, u, h, p) => {
                    u = st(u), o = Vt(i, o), a && (a = Vt(s, a)), l && (l = Vt(c, l)), p = Vt(h, p);
                    var d = (t => {
                        if (void 0 === t) return "_unknown";
                        var e = (t = t.replace(/[^a-zA-Z0-9_]/g, "$")).charCodeAt(0);
                        return e >= 48 && e <= 57 ? `_${t}` : t
                    })(u);
                    Ot(d, (function() {
                        Bt(`Cannot construct ${u} due to unbound types`, [r])
                    })), ot([t, e, n], r ? [r] : [], (e => {
                        var n, i;
                        e = e[0], i = r ? (n = e.registeredClass).instancePrototype : At.prototype;
                        var s = It(u, (function() {
                                if (Object.getPrototypeOf(this) !== c) throw new tt("Use 'new' to construct " + u);
                                if (void 0 === v.constructor_body) throw new tt(u + " has no accessible constructor");
                                for (var t = arguments.length, e = new Array(t), n = 0; n < t; n++) e[n] = arguments[n];
                                var r = v.constructor_body[e.length];
                                if (void 0 === r) throw new tt(`Tried to invoke ctor of ${u} with invalid number of parameters (${e.length}) - expected (${Object.keys(v.constructor_body).toString()}) parameters instead!`);
                                return r.apply(this, e)
                            })),
                            c = Object.create(i, {
                                constructor: {
                                    value: s
                                }
                            });
                        s.prototype = c;
                        var h, f, v = new Rt(u, s, c, p, n, o, a, l);
                        v.baseClass && (null !== (f = (h = v.baseClass).__derivedClasses) && void 0 !== f || (h.__derivedClasses = []), v.baseClass.__derivedClasses.push(v));
                        var g = new Lt(u, v, !0, !1, !1),
                            m = new Lt(u + "*", v, !1, !1, !1),
                            y = new Lt(u + " const*", v, !1, !0, !1);
                        return mt[t] = {
                            pointerType: m,
                            constPointerType: y
                        }, Ut(d, s), [g, m, y]
                    }))
                },
                sa: (t, e, n, r, i, o) => {
                    var s = Yt(e, n);
                    i = Vt(r, i), ot([], [t], (t => {
                        var n = `constructor ${(t=t[0]).name}`;
                        if (void 0 === t.registeredClass.constructor_body && (t.registeredClass.constructor_body = []), void 0 !== t.registeredClass.constructor_body[e - 1]) throw new tt(`Cannot register multiple constructors with identical number of parameters (${e-1}) for class '${t.name}'! Overload resolution is currently only performed using the parameter count, not actual type info!`);
                        return t.registeredClass.constructor_body[e - 1] = () => {
                            Bt(`Cannot construct ${t.name} due to unbound types`, s)
                        }, ot([], s, (r => (r.splice(1, 0, null), t.registeredClass.constructor_body[e - 1] = Xt(n, r, null, i, o), []))), []
                    }))
                },
                E: (t, e, n, r, i, o, s, a, c, l) => {
                    var u = Yt(n, r);
                    e = st(e), e = Zt(e), o = Vt(i, o), ot([], [t], (t => {
                        var r = `${(t=t[0]).name}.${e}`;

                        function i() {
                            Bt(`Cannot call ${r} due to unbound types`, u)
                        }
                        e.startsWith("@@") && (e = Symbol[e.substring(2)]), a && t.registeredClass.pureVirtualFunctions.push(e);
                        var c = t.registeredClass.instancePrototype,
                            l = c[e];
                        return void 0 === l || void 0 === l.overloadTable && l.className !== t.name && l.argCount === n - 2 ? (i.argCount = n - 2, i.className = t.name, c[e] = i) : (_t(c, e, r), c[e].overloadTable[n - 2] = i), ot([], u, (i => {
                            var a = Xt(r, i, t, o, s);
                            return void 0 === c[e].overloadTable ? (a.argCount = n - 2, c[e] = a) : c[e].overloadTable[n - 2] = a, []
                        })), []
                    }))
                },
                oa: t => ct(t, ie),
                F: (t, e, n, r) => {
                    function i() {}
                    e = st(e), i.values = {}, ct(t, {
                        name: e,
                        constructor: i,
                        fromWireType: function(t) {
                            return this.constructor.values[t]
                        },
                        toWireType: (t, e) => e.value,
                        argPackAdvance: ut,
                        readValueFromPointer: oe(e, n, r),
                        destructorFunction: null
                    }), Ot(e, i)
                },
                n: (t, e, n) => {
                    var r = se(t, "enum");
                    e = st(e);
                    var i = r.constructor,
                        o = Object.create(r.constructor.prototype, {
                            value: {
                                value: n
                            },
                            constructor: {
                                value: It(`${r.name}_${e}`, (function() {}))
                            }
                        });
                    i.values[n] = o, i[e] = o
                },
                W: (t, e, n) => {
                    ct(t, {
                        name: e = st(e),
                        fromWireType: t => t,
                        toWireType: (t, e) => e,
                        argPackAdvance: ut,
                        readValueFromPointer: ce(e, n),
                        destructorFunction: null
                    })
                },
                X: (t, e, n, r, i, o, s, a) => {
                    var c = Yt(e, n);
                    t = st(t), t = Zt(t), i = Vt(r, i), Ot(t, (function() {
                        Bt(`Cannot call ${t} due to unbound types`, c)
                    }), e - 1), ot([], c, (n => {
                        var r = [n[0], null].concat(n.slice(1));
                        return Ut(t, Xt(t, r, null, i, o), e - 1), []
                    }))
                },
                y: (t, e, n, r, i) => {
                    e = st(e);
                    var o = t => t;
                    if (0 === r) {
                        var s = 32 - 8 * n;
                        o = t => t << s >>> s
                    }
                    var a = e.includes("unsigned");
                    ct(t, {
                        name: e,
                        fromWireType: o,
                        toWireType: a ? function(t, e) {
                            return this.name, e >>> 0
                        } : function(t, e) {
                            return this.name, e
                        },
                        argPackAdvance: ut,
                        readValueFromPointer: le(e, n, 0 !== r),
                        destructorFunction: null
                    })
                },
                u: (t, e, n) => {
                    var r = [Int8Array, Uint8Array, Int16Array, Uint16Array, Int32Array, Uint32Array, Float32Array, Float64Array][e];

                    function i(t) {
                        var e = T[t >> 2],
                            n = T[t + 4 >> 2];
                        return new r(m.buffer, n, e)
                    }
                    ct(t, {
                        name: n = st(n),
                        fromWireType: i,
                        argPackAdvance: ut,
                        readValueFromPointer: i
                    }, {
                        ignoreDuplicateRegistrations: !0
                    })
                },
                ua: (t, e) => {
                    ct(t, ue)
                },
                V: (t, e) => {
                    var n = "std::string" === (e = st(e));
                    ct(t, {
                        name: e,
                        fromWireType(t) {
                            var e, r = T[t >> 2],
                                i = t + 4;
                            if (n)
                                for (var o = i, s = 0; s <= r; ++s) {
                                    var a = i + s;
                                    if (s == r || 0 == y[a]) {
                                        var c = fe(o, a - o);
                                        void 0 === e ? e = c : (e += "\0", e += c), o = a + 1
                                    }
                                } else {
                                    var l = new Array(r);
                                    for (s = 0; s < r; ++s) l[s] = String.fromCharCode(y[i + s]);
                                    e = l.join("")
                                }
                            return Me(t), e
                        },
                        toWireType(t, e) {
                            e instanceof ArrayBuffer && (e = new Uint8Array(e));
                            var r, i = "string" == typeof e;
                            i || e instanceof Uint8Array || e instanceof Uint8ClampedArray || e instanceof Int8Array || at("Cannot pass non-string to std::string"), r = n && i ? (t => {
                                for (var e = 0, n = 0; n < t.length; ++n) {
                                    var r = t.charCodeAt(n);
                                    r <= 127 ? e++ : r <= 2047 ? e += 2 : r >= 55296 && r <= 57343 ? (e += 4, ++n) : e += 3
                                }
                                return e
                            })(e) : e.length;
                            var o = Fe(4 + r + 1),
                                s = o + 4;
                            if (T[o >> 2] = r, n && i) he(e, s, r + 1);
                            else if (i)
                                for (var a = 0; a < r; ++a) {
                                    var c = e.charCodeAt(a);
                                    c > 255 && (Me(s), at("String has UTF-16 code units that do not fit in 8 bits")), y[s + a] = c
                                } else
                                    for (a = 0; a < r; ++a) y[s + a] = e[a];
                            return null !== t && t.push(Me, o), o
                        },
                        argPackAdvance: ut,
                        readValueFromPointer: Q,
                        destructorFunction(t) {
                            Me(t)
                        }
                    })
                },
                P: (t, e, n) => {
                    var r, i, o, s;
                    n = st(n), 2 === e ? (r = ge, i = me, s = ye, o = t => b[t >> 1]) : 4 === e && (r = we, i = be, s = xe, o = t => T[t >> 2]), ct(t, {
                        name: n,
                        fromWireType: t => {
                            for (var n, i = T[t >> 2], s = t + 4, a = 0; a <= i; ++a) {
                                var c = t + 4 + a * e;
                                if (a == i || 0 == o(c)) {
                                    var l = r(s, c - s);
                                    void 0 === n ? n = l : (n += "\0", n += l), s = c + e
                                }
                            }
                            return Me(t), n
                        },
                        toWireType: (t, r) => {
                            "string" != typeof r && at(`Cannot pass non-string to C++ string type ${n}`);
                            var o = s(r),
                                a = Fe(4 + o + e);
                            return T[a >> 2] = o / e, i(r, a + 4, o + e), null !== t && t.push(Me, a), a
                        },
                        argPackAdvance: ut,
                        readValueFromPointer: Q,
                        destructorFunction(t) {
                            Me(t)
                        }
                    })
                },
                L: (t, e, n, r, i, o) => {
                    q[t] = {
                        name: st(e),
                        rawConstructor: Vt(n, r),
                        rawDestructor: Vt(i, o),
                        fields: []
                    }
                },
                wa: (t, e, n, r, i, o, s, a, c, l) => {
                    q[t].fields.push({
                        fieldName: st(e),
                        getterReturnType: n,
                        getter: Vt(r, i),
                        getterContext: o,
                        setterArgumentType: s,
                        setter: Vt(a, c),
                        setterContext: l
                    })
                },
                qa: (t, e) => {
                    ct(t, {
                        isVoid: !0,
                        name: e = st(e),
                        argPackAdvance: 0,
                        fromWireType: () => {},
                        toWireType: (t, e) => {}
                    })
                },
                ja: (t, e, n) => y.copyWithin(t, e, e + n),
                T: (t, e, n, r) => (t = Te[t])(null, e = re.toValue(e), n, r),
                xa: ee,
                ya: t => 0 === t ? re.toHandle(Pe()) : (t = (t => {
                    var e = Ee[t];
                    return void 0 === e ? st(t) : e
                })(t), re.toHandle(Pe()[t])),
                U: (t, e, n) => {
                    var r = ((t, e) => {
                            for (var n = new Array(t), r = 0; r < t; ++r) n[r] = se(T[e + 4 * r >> 2], "parameter " + r);
                            return n
                        })(t, e),
                        i = r.shift();
                    t--;
                    var o = new Array(t),
                        s = `methodCaller<(${r.map((t=>t.name)).join(", ")}) => ${i.name}>`;
                    return (t => {
                        var e = Te.length;
                        return Te.push(t), e
                    })(It(s, ((e, s, a, c) => {
                        for (var l = 0, u = 0; u < t; ++u) o[u] = r[u].readValueFromPointer(c + l), l += r[u].argPackAdvance;
                        var h = 1 === n ? Ce(s, o) : s.apply(e, o);
                        return ((t, e, n) => {
                            var r = [],
                                i = t.toWireType(r, n);
                            return r.length && (T[e >> 2] = re.toHandle(r)), i
                        })(i, a, h)
                    })))
                },
                Y: t => {
                    t > 9 && (te[t + 1] += 1)
                },
                Z: t => {
                    var e = re.toValue(t);
                    K(e), ee(t)
                },
                ra: (t, e) => {
                    var n = (t = se(t, "_emval_take_value")).readValueFromPointer(e);
                    return re.toHandle(n)
                },
                da: (t, e, n, r) => {
                    var i = (new Date).getFullYear(),
                        o = new Date(i, 0, 1),
                        s = new Date(i, 6, 1),
                        a = o.getTimezoneOffset(),
                        c = s.getTimezoneOffset(),
                        l = Math.max(a, c);
                    T[t >> 2] = 60 * l, x[e >> 2] = +(a != c);
                    var u = t => {
                            var e = t >= 0 ? "-" : "+",
                                n = Math.abs(t);
                            return `UTC${e}${String(Math.floor(n/60)).padStart(2,"0")}${String(n%60).padStart(2,"0")}`
                        },
                        h = u(a),
                        p = u(c);
                    c < a ? (he(h, n, 17), he(p, r, 17)) : (he(h, r, 17), he(p, n, 17))
                },
                ha: t => {
                    var e = y.length,
                        n = 2147483648;
                    if ((t >>>= 0) > n) return !1;
                    for (var r = 1; r <= 4; r *= 2) {
                        var i = e * (1 + .2 / r);
                        i = Math.min(i, t + 100663296);
                        var o = Math.min(n, $e(Math.max(t, i), 65536));
                        if (Se(o)) return !0
                    }
                    return !1
                },
                ea: (t, e) => {
                    var n = 0;
                    return Ie().forEach(((r, i) => {
                        var o = e + n;
                        T[t + 4 * i >> 2] = o, ((t, e) => {
                            for (var n = 0; n < t.length; ++n) m[e++] = t.charCodeAt(n);
                            m[e] = 0
                        })(r, o), n += r.length + 1
                    })), 0
                },
                fa: (t, e) => {
                    var n = Ie();
                    T[t >> 2] = n.length;
                    var r = 0;
                    return n.forEach((t => r += t.length + 1)), T[e >> 2] = r, 0
                },
                ia: t => 52,
                $: function(t, e, n, r, i) {
                    return 70
                },
                S: (t, e, n, r) => {
                    for (var i = 0, o = 0; o < n; o++) {
                        var s = T[e >> 2],
                            a = T[e + 4 >> 2];
                        e += 8;
                        for (var c = 0; c < a; c++) Oe(t, y[s + c]);
                        i += a
                    }
                    return T[r >> 2] = i, 0
                },
                J: function(t, e, n, r) {
                    var i = H();
                    try {
                        return Wt(t)(e, n, r)
                    } catch (t) {
                        if (U(i), t !== t + 0) throw t;
                        je(1, 0)
                    }
                },
                C: function(t, e, n, r, i, o) {
                    var s = H();
                    try {
                        return Wt(t)(e, n, r, i, o)
                    } catch (t) {
                        if (U(s), t !== t + 0) throw t;
                        je(1, 0)
                    }
                },
                Q: function(t, e, n, r, i) {
                    var o = H();
                    try {
                        return Wt(t)(e, n, r, i)
                    } catch (t) {
                        if (U(o), t !== t + 0) throw t;
                        je(1, 0)
                    }
                },
                R: function(t, e, n, r) {
                    var i = H();
                    try {
                        return Wt(t)(e, n, r)
                    } catch (t) {
                        if (U(i), t !== t + 0) throw t;
                        je(1, 0)
                    }
                },
                r: function(t) {
                    var e = H();
                    try {
                        return Wt(t)()
                    } catch (t) {
                        if (U(e), t !== t + 0) throw t;
                        je(1, 0)
                    }
                },
                b: function(t, e) {
                    var n = H();
                    try {
                        return Wt(t)(e)
                    } catch (t) {
                        if (U(n), t !== t + 0) throw t;
                        je(1, 0)
                    }
                },
                D: function(t, e, n, r) {
                    var i = H();
                    try {
                        return Wt(t)(e, n, r)
                    } catch (t) {
                        if (U(i), t !== t + 0) throw t;
                        je(1, 0)
                    }
                },
                la: function(t, e, n) {
                    var r = H();
                    try {
                        return Wt(t)(e, n)
                    } catch (t) {
                        if (U(r), t !== t + 0) throw t;
                        je(1, 0)
                    }
                },
                c: function(t, e, n) {
                    var r = H();
                    try {
                        return Wt(t)(e, n)
                    } catch (t) {
                        if (U(r), t !== t + 0) throw t;
                        je(1, 0)
                    }
                },
                ka: function(t, e, n, r, i) {
                    var o = H();
                    try {
                        return Wt(t)(e, n, r, i)
                    } catch (t) {
                        if (U(o), t !== t + 0) throw t;
                        je(1, 0)
                    }
                },
                h: function(t, e, n, r) {
                    var i = H();
                    try {
                        return Wt(t)(e, n, r)
                    } catch (t) {
                        if (U(i), t !== t + 0) throw t;
                        je(1, 0)
                    }
                },
                i: function(t, e, n, r, i) {
                    var o = H();
                    try {
                        return Wt(t)(e, n, r, i)
                    } catch (t) {
                        if (U(o), t !== t + 0) throw t;
                        je(1, 0)
                    }
                },
                s: function(t, e, n, r, i, o) {
                    var s = H();
                    try {
                        return Wt(t)(e, n, r, i, o)
                    } catch (t) {
                        if (U(s), t !== t + 0) throw t;
                        je(1, 0)
                    }
                },
                N: function(t, e, n, r, i, o, s) {
                    var a = H();
                    try {
                        return Wt(t)(e, n, r, i, o, s)
                    } catch (t) {
                        if (U(a), t !== t + 0) throw t;
                        je(1, 0)
                    }
                },
                w: function(t, e, n, r, i, o, s) {
                    var a = H();
                    try {
                        return Wt(t)(e, n, r, i, o, s)
                    } catch (t) {
                        if (U(a), t !== t + 0) throw t;
                        je(1, 0)
                    }
                },
                I: function(t, e, n, r, i, o, s, a) {
                    var c = H();
                    try {
                        return Wt(t)(e, n, r, i, o, s, a)
                    } catch (t) {
                        if (U(c), t !== t + 0) throw t;
                        je(1, 0)
                    }
                },
                K: function(t, e, n, r, i, o, s, a, c) {
                    var l = H();
                    try {
                        return Wt(t)(e, n, r, i, o, s, a, c)
                    } catch (t) {
                        if (U(l), t !== t + 0) throw t;
                        je(1, 0)
                    }
                },
                B: function(t, e, n, r, i, o, s, a, c, l) {
                    var u = H();
                    try {
                        return Wt(t)(e, n, r, i, o, s, a, c, l)
                    } catch (t) {
                        if (U(u), t !== t + 0) throw t;
                        je(1, 0)
                    }
                },
                H: function(t, e, n, r, i, o, s, a, c, l, u, h) {
                    var p = H();
                    try {
                        return Wt(t)(e, n, r, i, o, s, a, c, l, u, h)
                    } catch (t) {
                        if (U(p), t !== t + 0) throw t;
                        je(1, 0)
                    }
                },
                aa: function(t, e, n, r) {
                    var i = H();
                    try {
                        return ze(t, e, n, r)
                    } catch (t) {
                        if (U(i), t !== t + 0) throw t;
                        je(1, 0)
                    }
                },
                _: function(t, e, n, r, i) {
                    var o = H();
                    try {
                        return Ye(t, e, n, r, i)
                    } catch (t) {
                        if (U(o), t !== t + 0) throw t;
                        je(1, 0)
                    }
                },
                l: function(t) {
                    var e = H();
                    try {
                        Wt(t)()
                    } catch (t) {
                        if (U(e), t !== t + 0) throw t;
                        je(1, 0)
                    }
                },
                f: function(t, e) {
                    var n = H();
                    try {
                        Wt(t)(e)
                    } catch (t) {
                        if (U(n), t !== t + 0) throw t;
                        je(1, 0)
                    }
                },
                e: function(t, e, n) {
                    var r = H();
                    try {
                        Wt(t)(e, n)
                    } catch (t) {
                        if (U(r), t !== t + 0) throw t;
                        je(1, 0)
                    }
                },
                g: function(t, e, n, r) {
                    var i = H();
                    try {
                        Wt(t)(e, n, r)
                    } catch (t) {
                        if (U(i), t !== t + 0) throw t;
                        je(1, 0)
                    }
                },
                M: function(t, e, n, r, i, o, s) {
                    var a = H();
                    try {
                        Wt(t)(e, n, r, i, o, s)
                    } catch (t) {
                        if (U(a), t !== t + 0) throw t;
                        je(1, 0)
                    }
                },
                m: function(t, e, n, r, i) {
                    var o = H();
                    try {
                        Wt(t)(e, n, r, i)
                    } catch (t) {
                        if (U(o), t !== t + 0) throw t;
                        je(1, 0)
                    }
                },
                ma: function(t, e, n, r, i, o, s, a) {
                    var c = H();
                    try {
                        Wt(t)(e, n, r, i, o, s, a)
                    } catch (t) {
                        if (U(c), t !== t + 0) throw t;
                        je(1, 0)
                    }
                },
                p: function(t, e, n, r, i, o) {
                    var s = H();
                    try {
                        Wt(t)(e, n, r, i, o)
                    } catch (t) {
                        if (U(s), t !== t + 0) throw t;
                        je(1, 0)
                    }
                },
                v: function(t, e, n, r, i, o, s, a) {
                    var c = H();
                    try {
                        Wt(t)(e, n, r, i, o, s, a)
                    } catch (t) {
                        if (U(c), t !== t + 0) throw t;
                        je(1, 0)
                    }
                },
                na: function(t, e, n, r, i, o, s, a, c) {
                    var l = H();
                    try {
                        Wt(t)(e, n, r, i, o, s, a, c)
                    } catch (t) {
                        if (U(l), t !== t + 0) throw t;
                        je(1, 0)
                    }
                },
                A: function(t, e, n, r, i, o, s, a, c, l) {
                    var u = H();
                    try {
                        Wt(t)(e, n, r, i, o, s, a, c, l)
                    } catch (t) {
                        if (U(u), t !== t + 0) throw t;
                        je(1, 0)
                    }
                },
                o: function(t, e, n, r, i, o, s, a, c, l, u) {
                    var h = H();
                    try {
                        Wt(t)(e, n, r, i, o, s, a, c, l, u)
                    } catch (t) {
                        if (U(h), t !== t + 0) throw t;
                        je(1, 0)
                    }
                },
                G: function(t, e, n, r, i, o, s, a, c, l, u, h, p, d, f, v) {
                    var g = H();
                    try {
                        Wt(t)(e, n, r, i, o, s, a, c, l, u, h, p, d, f, v)
                    } catch (t) {
                        if (U(g), t !== t + 0) throw t;
                        je(1, 0)
                    }
                },
                z: t => t
            },
            ke = function() {
                var t, e = {
                    a: Re
                };

                function i(t, e) {
                    return ke = t.exports, g = ke.za, S(), jt = ke.Da,
                        function(t) {
                            I.unshift(t)
                        }(ke.Aa),
                        function() {
                            var t;
                            if (O--, null === (t = r.monitorRunDependencies) || void 0 === t || t.call(r, O), 0 == O && R) {
                                var e = R;
                                R = null, e()
                            }
                        }(), ke
                }
                if (function() {
                        var t;
                        O++, null === (t = r.monitorRunDependencies) || void 0 === t || t.call(r, O)
                    }(), r.instantiateWasm) try {
                    return r.instantiateWasm(e, i)
                } catch (t) {
                    v(`Module.instantiateWasm callback failed with error: ${t}`), n(t)
                }
                return null !== (t = D) && void 0 !== t || (D = F()),
                    function(t, e, n, r) {
                        return t || "function" != typeof WebAssembly.instantiateStreaming || M(e) || "function" != typeof fetch ? j(e, n, r) : fetch(e, {
                            credentials: "same-origin"
                        }).then((t => WebAssembly.instantiateStreaming(t, n).then(r, (function(t) {
                            return v(`wasm streaming compile failed: ${t}`), v("falling back to ArrayBuffer instantiation"), j(e, n, r)
                        }))))
                    }(C, D, e, (function(t) {
                        i(t.instance)
                    })).catch(n), {}
            }(),
            De = t => (De = ke.Ba)(t),
            Me = r._free = t => (Me = r._free = ke.Ca)(t),
            Fe = r._malloc = t => (Fe = r._malloc = ke.Ea)(t),
            Le = t => (Le = ke.Fa)(t),
            je = (t, e) => (je = ke.Ga)(t, e),
            Ne = t => (Ne = ke.Ha)(t),
            Ue = t => (Ue = ke.Ia)(t),
            He = () => (He = ke.Ja)(),
            We = t => (We = ke.Ka)(t),
            Ge = t => (Ge = ke.La)(t),
            Ve = (t, e, n) => (Ve = ke.Ma)(t, e, n);
        r.dynCall_viijii = (t, e, n, i, o, s, a) => (r.dynCall_viijii = ke.Na)(t, e, n, i, o, s, a);
        var ze = r.dynCall_jiii = (t, e, n, i) => (ze = r.dynCall_jiii = ke.Oa)(t, e, n, i);
        r.dynCall_jiji = (t, e, n, i, o) => (r.dynCall_jiji = ke.Pa)(t, e, n, i, o);
        var Be, Ye = r.dynCall_jiiii = (t, e, n, i, o) => (Ye = r.dynCall_jiiii = ke.Qa)(t, e, n, i, o);

        function Xe() {
            function t() {
                var t;
                Be || (Be = !0, r.calledRun = !0, !$ && (N(I), e(r), null === (t = r.onRuntimeInitialized) || void 0 === t || t.call(r), function() {
                    if (r.postRun)
                        for ("function" == typeof r.postRun && (r.postRun = [r.postRun]); r.postRun.length;) t = r.postRun.shift(), _.unshift(t);
                    var t;
                    N(_)
                }()))
            }
            O > 0 || (function() {
                if (r.preRun)
                    for ("function" == typeof r.preRun && (r.preRun = [r.preRun]); r.preRun.length;) t = r.preRun.shift(), A.unshift(t);
                var t;
                N(A)
            }(), O > 0) || (r.setStatus ? (r.setStatus("Running..."), setTimeout((() => {
                setTimeout((() => r.setStatus("")), 1), t()
            }), 1)) : t())
        }
        if (r.dynCall_iiiiij = (t, e, n, i, o, s, a) => (r.dynCall_iiiiij = ke.Ra)(t, e, n, i, o, s, a), r.dynCall_iiiiijj = (t, e, n, i, o, s, a, c, l) => (r.dynCall_iiiiijj = ke.Sa)(t, e, n, i, o, s, a, c, l), r.dynCall_iiiiiijj = (t, e, n, i, o, s, a, c, l, u) => (r.dynCall_iiiiiijj = ke.Ta)(t, e, n, i, o, s, a, c, l, u), R = function t() {
                Be || Xe(), Be || (R = t)
            }, r.preInit)
            for ("function" == typeof r.preInit && (r.preInit = [r.preInit]); r.preInit.length > 0;) r.preInit.pop()();
        return Xe(), i
    });

    function X(t) {
        return e = Y, n = t, void G.set(e, {
            moduleOverrides: n
        });
        var e, n
    }
    async function q(t, e) {
        return V(Y, t, e)
    }
    var K = t => !(!t || !t.Window) && t instanceof t.Window;
    let Q, Z;

    function J(t) {
        Q = t;
        const e = t.document.createTextNode("");
        e.ownerDocument !== t.document && "function" == typeof t.wrap && t.wrap(e) === e && (t = t.wrap(t)), Z = t
    }

    function tt(t) {
        if (K(t)) return t;
        return (t.ownerDocument || t).defaultView || Z.window
    }
    "undefined" != typeof window && window && J(window);
    const et = t => !!t && "object" == typeof t,
        nt = t => "function" == typeof t;
    var rt = {
        window: t => t === Z || K(t),
        docFrag: t => et(t) && 11 === t.nodeType,
        object: et,
        func: nt,
        number: t => "number" == typeof t,
        bool: t => "boolean" == typeof t,
        string: t => "string" == typeof t,
        element: t => {
            if (!t || "object" != typeof t) return !1;
            const e = tt(t) || Z;
            return /object|function/.test(typeof Element) ? t instanceof Element || t instanceof e.Element : 1 === t.nodeType && "string" == typeof t.nodeName
        },
        plainObject: t => et(t) && !!t.constructor && /function Object\b/.test(t.constructor.toString()),
        array: t => et(t) && void 0 !== t.length && nt(t.splice)
    };

    function it(t) {
        let {
            interaction: e
        } = t;
        if ("drag" !== e.prepared.name) return;
        const n = e.prepared.axis;
        "x" === n ? (e.coords.cur.page.y = e.coords.start.page.y, e.coords.cur.client.y = e.coords.start.client.y, e.coords.velocity.client.y = 0, e.coords.velocity.page.y = 0) : "y" === n && (e.coords.cur.page.x = e.coords.start.page.x, e.coords.cur.client.x = e.coords.start.client.x, e.coords.velocity.client.x = 0, e.coords.velocity.page.x = 0)
    }

    function ot(t) {
        let {
            iEvent: e,
            interaction: n
        } = t;
        if ("drag" !== n.prepared.name) return;
        const r = n.prepared.axis;
        if ("x" === r || "y" === r) {
            const t = "x" === r ? "y" : "x";
            e.page[t] = n.coords.start.page[t], e.client[t] = n.coords.start.client[t], e.delta[t] = 0
        }
    }
    const st = {
            id: "actions/drag",
            install: function(t) {
                const {
                    actions: e,
                    Interactable: n,
                    defaults: r
                } = t;
                n.prototype.draggable = st.draggable, e.map.drag = st, e.methodDict.drag = "draggable", r.actions.drag = st.defaults
            },
            listeners: {
                "interactions:before-action-move": it,
                "interactions:action-resume": it,
                "interactions:action-move": ot,
                "auto-start:check": t => {
                    const {
                        interaction: e,
                        interactable: n,
                        buttons: r
                    } = t, i = n.options.drag;
                    if (i && i.enabled && (!e.pointerIsDown || !/mouse|pointer/.test(e.pointerType) || r & n.options.drag.mouseButtons)) return t.action = {
                        name: "drag",
                        axis: "start" === i.lockAxis ? i.startAxis : i.lockAxis
                    }, !1
                }
            },
            draggable: function(t) {
                return rt.object(t) ? (this.options.drag.enabled = !1 !== t.enabled, this.setPerAction("drag", t), this.setOnEvents("drag", t), /^(xy|x|y|start)$/.test(t.lockAxis) && (this.options.drag.lockAxis = t.lockAxis), /^(xy|x|y)$/.test(t.startAxis) && (this.options.drag.startAxis = t.startAxis), this) : rt.bool(t) ? (this.options.drag.enabled = t, this) : this.options.drag
            },
            beforeMove: it,
            move: ot,
            defaults: {
                startAxis: "xy",
                lockAxis: "xy"
            },
            getCursor: () => "move",
            filterEventType: t => 0 === t.search("drag")
        },
        at = {
            init: function(t) {
                const e = t;
                at.document = e.document, at.DocumentFragment = e.DocumentFragment || ct, at.SVGElement = e.SVGElement || ct, at.SVGSVGElement = e.SVGSVGElement || ct, at.SVGElementInstance = e.SVGElementInstance || ct, at.Element = e.Element || ct, at.HTMLElement = e.HTMLElement || at.Element, at.Event = e.Event, at.Touch = e.Touch || ct, at.PointerEvent = e.PointerEvent || e.MSPointerEvent
            },
            document: null,
            DocumentFragment: null,
            SVGElement: null,
            SVGSVGElement: null,
            SVGElementInstance: null,
            Element: null,
            HTMLElement: null,
            Event: null,
            Touch: null,
            PointerEvent: null
        };

    function ct() {}
    const lt = {
        init: function(t) {
            const e = at.Element,
                n = t.navigator || {};
            lt.supportsTouch = "ontouchstart" in t || rt.func(t.DocumentTouch) && at.document instanceof t.DocumentTouch, lt.supportsPointerEvent = !1 !== n.pointerEnabled && !!at.PointerEvent, lt.isIOS = /iP(hone|od|ad)/.test(n.platform), lt.isIOS7 = /iP(hone|od|ad)/.test(n.platform) && /OS 7[^\d]/.test(n.appVersion), lt.isIe9 = /MSIE 9/.test(n.userAgent), lt.isOperaMobile = "Opera" === n.appName && lt.supportsTouch && /Presto/.test(n.userAgent), lt.prefixedMatchesSelector = "matches" in e.prototype ? "matches" : "webkitMatchesSelector" in e.prototype ? "webkitMatchesSelector" : "mozMatchesSelector" in e.prototype ? "mozMatchesSelector" : "oMatchesSelector" in e.prototype ? "oMatchesSelector" : "msMatchesSelector", lt.pEventTypes = lt.supportsPointerEvent ? at.PointerEvent === t.MSPointerEvent ? {
                up: "MSPointerUp",
                down: "MSPointerDown",
                over: "mouseover",
                out: "mouseout",
                move: "MSPointerMove",
                cancel: "MSPointerCancel"
            } : {
                up: "pointerup",
                down: "pointerdown",
                over: "pointerover",
                out: "pointerout",
                move: "pointermove",
                cancel: "pointercancel"
            } : null, lt.wheelEvent = at.document && "onmousewheel" in at.document ? "mousewheel" : "wheel"
        },
        supportsTouch: null,
        supportsPointerEvent: null,
        isIOS7: null,
        isIOS: null,
        isIe9: null,
        isOperaMobile: null,
        prefixedMatchesSelector: null,
        pEventTypes: null,
        wheelEvent: null
    };
    const ut = (t, e) => {
            for (const n of e) t.push(n);
            return t
        },
        ht = t => ut([], t),
        pt = (t, e) => {
            for (let n = 0; n < t.length; n++)
                if (e(t[n], n, t)) return n;
            return -1
        },
        dt = (t, e) => t[pt(t, e)];

    function ft(t) {
        const e = {};
        for (const n in t) {
            const r = t[n];
            rt.plainObject(r) ? e[n] = ft(r) : rt.array(r) ? e[n] = ht(r) : e[n] = r
        }
        return e
    }

    function vt(t, e) {
        for (const n in e) t[n] = e[n];
        return t
    }
    let gt, mt, yt = 0;
    var wt = {
        request: t => gt(t),
        cancel: t => mt(t),
        init: function(t) {
            if (gt = t.requestAnimationFrame, mt = t.cancelAnimationFrame, !gt) {
                const e = ["ms", "moz", "webkit", "o"];
                for (const n of e) gt = t[`${n}RequestAnimationFrame`], mt = t[`${n}CancelAnimationFrame`] || t[`${n}CancelRequestAnimationFrame`]
            }
            gt = gt && gt.bind(t), mt = mt && mt.bind(t), gt || (gt = e => {
                const n = Date.now(),
                    r = Math.max(0, 16 - (n - yt)),
                    i = t.setTimeout((() => {
                        e(n + r)
                    }), r);
                return yt = n + r, i
            }, mt = t => clearTimeout(t))
        }
    };

    function bt(t, e) {
        let n = arguments.length > 2 && void 0 !== arguments[2] ? arguments[2] : t => !0,
            r = arguments.length > 3 ? arguments[3] : void 0;
        if (r = r || {}, rt.string(t) && -1 !== t.search(" ") && (t = xt(t)), rt.array(t)) return t.forEach((t => bt(t, e, n, r))), r;
        if (rt.object(t) && (e = t, t = ""), rt.func(e) && n(t)) r[t] = r[t] || [], r[t].push(e);
        else if (rt.array(e))
            for (const i of e) bt(t, i, n, r);
        else if (rt.object(e))
            for (const i in e) {
                const o = xt(i).map((e => `${t}${e}`));
                bt(o, e[i], n, r)
            }
        return r
    }

    function xt(t) {
        return t.trim().split(/ +/)
    }

    function Tt(t, e) {
        for (const n of e) {
            if (t.immediatePropagationStopped) break;
            n(t)
        }
    }
    class Et {
        constructor(t) {
            this.options = void 0, this.types = {}, this.propagationStopped = !1, this.immediatePropagationStopped = !1, this.global = void 0, this.options = vt({}, t || {})
        }
        fire(t) {
            let e;
            const n = this.global;
            (e = this.types[t.type]) && Tt(t, e), !t.propagationStopped && n && (e = n[t.type]) && Tt(t, e)
        }
        on(t, e) {
            const n = bt(t, e);
            for (t in n) this.types[t] = ut(this.types[t] || [], n[t])
        }
        off(t, e) {
            const n = bt(t, e);
            for (t in n) {
                const e = this.types[t];
                if (e && e.length)
                    for (const r of n[t]) {
                        const t = e.indexOf(r); - 1 !== t && e.splice(t, 1)
                    }
            }
        }
        getRect(t) {
            return null
        }
    }

    function Pt(t, e) {
        if (t.contains) return t.contains(e);
        for (; e;) {
            if (e === t) return !0;
            e = e.parentNode
        }
        return !1
    }

    function Ct(t, e) {
        for (; rt.element(t);) {
            if (St(t, e)) return t;
            t = $t(t)
        }
        return null
    }

    function $t(t) {
        let e = t.parentNode;
        if (rt.docFrag(e)) {
            for (;
                (e = e.host) && rt.docFrag(e););
            return e
        }
        return e
    }

    function St(t, e) {
        return Z !== Q && (e = e.replace(/\/deep\//g, " ")), t[lt.prefixedMatchesSelector](e)
    }

    function At(t, e, n) {
        for (; rt.element(t);) {
            if (St(t, e)) return !0;
            if ((t = $t(t)) === n) return St(t, e)
        }
        return !1
    }

    function It(t) {
        return t.correspondingUseElement || t
    }

    function _t(t) {
        const e = t instanceof at.SVGElement ? t.getBoundingClientRect() : t.getClientRects()[0];
        return e && {
            left: e.left,
            right: e.right,
            top: e.top,
            bottom: e.bottom,
            width: e.width || e.right - e.left,
            height: e.height || e.bottom - e.top
        }
    }

    function Ot(t) {
        const e = _t(t);
        if (!lt.isIOS7 && e) {
            const r = {
                x: (n = (n = tt(t)) || Z).scrollX || n.document.documentElement.scrollLeft,
                y: n.scrollY || n.document.documentElement.scrollTop
            };
            e.left += r.x, e.right += r.x, e.top += r.y, e.bottom += r.y
        }
        var n;
        return e
    }

    function Rt(t) {
        return !!rt.string(t) && (at.document.querySelector(t), !0)
    }
    const kt = ["webkit", "moz"];

    function Dt(t, e) {
        t.__set || (t.__set = {});
        for (const n in e) kt.some((t => 0 === n.indexOf(t))) || "function" != typeof t[n] && "__set" !== n && Object.defineProperty(t, n, {
            get: () => n in t.__set ? t.__set[n] : t.__set[n] = e[n],
            set(e) {
                t.__set[n] = e
            },
            configurable: !0
        });
        return t
    }
    var Mt = (t, e) => Math.sqrt(t * t + e * e);

    function Ft(t, e) {
        t.page = t.page || {}, t.page.x = e.page.x, t.page.y = e.page.y, t.client = t.client || {}, t.client.x = e.client.x, t.client.y = e.client.y, t.timeStamp = e.timeStamp
    }

    function Lt(t) {
        return t instanceof at.Event || t instanceof at.Touch
    }

    function jt(t, e, n) {
        return t = t || "page", (n = n || {}).x = e[t + "X"], n.y = e[t + "Y"], n
    }

    function Nt(t) {
        return rt.number(t.pointerId) ? t.pointerId : t.identifier
    }

    function Ut(t, e, n) {
        const r = e.length > 1 ? Wt(e) : e[0];
        ! function(t, e) {
            e = e || {
                x: 0,
                y: 0
            }, lt.isOperaMobile && Lt(t) ? (jt("screen", t, e), e.x += window.scrollX, e.y += window.scrollY) : jt("page", t, e)
        }(r, t.page),
        function(t, e) {
            e = e || {}, lt.isOperaMobile && Lt(t) ? jt("screen", t, e) : jt("client", t, e)
        }(r, t.client), t.timeStamp = n
    }

    function Ht(t) {
        const e = [];
        return rt.array(t) ? (e[0] = t[0], e[1] = t[1]) : "touchend" === t.type ? 1 === t.touches.length ? (e[0] = t.touches[0], e[1] = t.changedTouches[0]) : 0 === t.touches.length && (e[0] = t.changedTouches[0], e[1] = t.changedTouches[1]) : (e[0] = t.touches[0], e[1] = t.touches[1]), e
    }

    function Wt(t) {
        const e = {
            pageX: 0,
            pageY: 0,
            clientX: 0,
            clientY: 0,
            screenX: 0,
            screenY: 0
        };
        for (const n of t)
            for (const t in e) e[t] += n[t];
        for (const n in e) e[n] /= t.length;
        return e
    }

    function Gt(t) {
        if (!t.length) return null;
        const e = Ht(t),
            n = Math.min(e[0].pageX, e[1].pageX),
            r = Math.min(e[0].pageY, e[1].pageY),
            i = Math.max(e[0].pageX, e[1].pageX),
            o = Math.max(e[0].pageY, e[1].pageY);
        return {
            x: n,
            y: r,
            left: n,
            top: r,
            right: i,
            bottom: o,
            width: i - n,
            height: o - r
        }
    }

    function Vt(t, e) {
        const n = e + "X",
            r = e + "Y",
            i = Ht(t),
            o = i[0][n] - i[1][n],
            s = i[0][r] - i[1][r];
        return Mt(o, s)
    }

    function zt(t, e) {
        const n = e + "X",
            r = e + "Y",
            i = Ht(t),
            o = i[1][n] - i[0][n],
            s = i[1][r] - i[0][r];
        return 180 * Math.atan2(s, o) / Math.PI
    }

    function Bt(t) {
        const e = rt.func(t.composedPath) ? t.composedPath() : t.path;
        return [It(e ? e[0] : t.target), It(t.currentTarget)]
    }
    class Yt {
        constructor(t) {
            this.currentTarget = void 0, this.originalEvent = void 0, this.type = void 0, this.originalEvent = t, Dt(this, t)
        }
        preventOriginalDefault() {
            this.originalEvent.preventDefault()
        }
        stopPropagation() {
            this.originalEvent.stopPropagation()
        }
        stopImmediatePropagation() {
            this.originalEvent.stopImmediatePropagation()
        }
    }

    function Xt(t) {
        return rt.object(t) ? {
            capture: !!t.capture,
            passive: !!t.passive
        } : {
            capture: !!t,
            passive: !1
        }
    }

    function qt(t, e) {
        return t === e || ("boolean" == typeof t ? !!e.capture === t && !1 == !!e.passive : !!t.capture == !!e.capture && !!t.passive == !!e.passive)
    }
    var Kt = {
        id: "events",
        install: function(t) {
            var e;
            const n = [],
                r = {},
                i = [],
                o = {
                    add: s,
                    remove: a,
                    addDelegate: function(t, e, n, o, a) {
                        const u = Xt(a);
                        if (!r[n]) {
                            r[n] = [];
                            for (const t of i) s(t, n, c), s(t, n, l, !0)
                        }
                        const h = r[n];
                        let p = dt(h, (n => n.selector === t && n.context === e));
                        p || (p = {
                            selector: t,
                            context: e,
                            listeners: []
                        }, h.push(p));
                        p.listeners.push({
                            func: o,
                            options: u
                        })
                    },
                    removeDelegate: function(t, e, n, i, o) {
                        const s = Xt(o),
                            u = r[n];
                        let h, p = !1;
                        if (!u) return;
                        for (h = u.length - 1; h >= 0; h--) {
                            const r = u[h];
                            if (r.selector === t && r.context === e) {
                                const {
                                    listeners: t
                                } = r;
                                for (let r = t.length - 1; r >= 0; r--) {
                                    const o = t[r];
                                    if (o.func === i && qt(o.options, s)) {
                                        t.splice(r, 1), t.length || (u.splice(h, 1), a(e, n, c), a(e, n, l, !0)), p = !0;
                                        break
                                    }
                                }
                                if (p) break
                            }
                        }
                    },
                    delegateListener: c,
                    delegateUseCapture: l,
                    delegatedEvents: r,
                    documents: i,
                    targets: n,
                    supportsOptions: !1,
                    supportsPassive: !1
                };

            function s(t, e, r, i) {
                if (!t.addEventListener) return;
                const s = Xt(i);
                let a = dt(n, (e => e.eventTarget === t));
                a || (a = {
                    eventTarget: t,
                    events: {}
                }, n.push(a)), a.events[e] || (a.events[e] = []), dt(a.events[e], (t => t.func === r && qt(t.options, s))) || (t.addEventListener(e, r, o.supportsOptions ? s : s.capture), a.events[e].push({
                    func: r,
                    options: s
                }))
            }

            function a(t, e, r, i) {
                if (!t.addEventListener || !t.removeEventListener) return;
                const s = pt(n, (e => e.eventTarget === t)),
                    c = n[s];
                if (!c || !c.events) return;
                if ("all" === e) {
                    for (e in c.events) c.events.hasOwnProperty(e) && a(t, e, "all");
                    return
                }
                let l = !1;
                const u = c.events[e];
                if (u) {
                    if ("all" === r) {
                        for (let n = u.length - 1; n >= 0; n--) {
                            const r = u[n];
                            a(t, e, r.func, r.options)
                        }
                        return
                    } {
                        const n = Xt(i);
                        for (let i = 0; i < u.length; i++) {
                            const s = u[i];
                            if (s.func === r && qt(s.options, n)) {
                                t.removeEventListener(e, r, o.supportsOptions ? n : n.capture), u.splice(i, 1), 0 === u.length && (delete c.events[e], l = !0);
                                break
                            }
                        }
                    }
                }
                l && !Object.keys(c.events).length && n.splice(s, 1)
            }

            function c(t, e) {
                const n = Xt(e),
                    i = new Yt(t),
                    o = r[t.type],
                    [s] = Bt(t);
                let a = s;
                for (; rt.element(a);) {
                    for (let t = 0; t < o.length; t++) {
                        const e = o[t],
                            {
                                selector: r,
                                context: c
                            } = e;
                        if (St(a, r) && Pt(c, s) && Pt(c, a)) {
                            const {
                                listeners: t
                            } = e;
                            i.currentTarget = a;
                            for (const e of t) qt(e.options, n) && e.func(i)
                        }
                    }
                    a = $t(a)
                }
            }

            function l(t) {
                return c.call(this, t, !0)
            }
            return null == (e = t.document) || e.createElement("div").addEventListener("test", null, {
                get capture() {
                    return o.supportsOptions = !0
                },
                get passive() {
                    return o.supportsPassive = !0
                }
            }), t.events = o, o
        }
    };
    const Qt = function(t) {
        return /^(always|never|auto)$/.test(t) ? (this.options.preventDefault = t, this) : rt.bool(t) ? (this.options.preventDefault = t ? "always" : "never", this) : this.options.preventDefault
    };

    function Zt(t) {
        let {
            interaction: e,
            event: n
        } = t;
        e.interactable && e.interactable.checkAndPreventDefault(n)
    }
    var Jt = {
        id: "core/interactablePreventDefault",
        install: function(t) {
            const {
                Interactable: e
            } = t;
            e.prototype.preventDefault = Qt, e.prototype.checkAndPreventDefault = function(e) {
                return function(t, e, n) {
                    const r = t.options.preventDefault;
                    if ("never" !== r)
                        if ("always" !== r) {
                            if (e.events.supportsPassive && /^touch(start|move)$/.test(n.type)) {
                                const t = tt(n.target).document,
                                    r = e.getDocOptions(t);
                                if (!r || !r.events || !1 !== r.events.passive) return
                            }
                            /^(mouse|pointer|touch)*(down|start)/i.test(n.type) || rt.element(n.target) && St(n.target, "input,select,textarea,[contenteditable=true],[contenteditable=true] *") || n.preventDefault()
                        } else n.preventDefault()
                }(this, t, e)
            }, t.interactions.docEvents.push({
                type: "dragstart",
                listener(e) {
                    for (const n of t.interactions.list)
                        if (n.element && (n.element === e.target || Pt(n.element, e.target))) return void n.interactable.checkAndPreventDefault(e)
                }
            })
        },
        listeners: ["down", "move", "up", "cancel"].reduce(((t, e) => (t[`interactions:${e}`] = Zt, t)), {})
    };

    function te(t, e) {
        let n = !1;
        return function() {
            return n || (Z.console.warn(e), n = !0), t.apply(this, arguments)
        }
    }

    function ee(t, e) {
        return t.name = e.name, t.axis = e.axis, t.edges = e.edges, t
    }

    function ne(t, e, n, r) {
        let i = t;
        return rt.string(i) ? i = function(t, e, n) {
            return "parent" === t ? $t(n) : "self" === t ? e.getRect(n) : Ct(n, t)
        }(i, e, n) : rt.func(i) && (i = i(...r)), rt.element(i) && (i = Ot(i)), i
    }
    class re {
        constructor(t) {
            this.immediatePropagationStopped = !1, this.propagationStopped = !1, this._interaction = t
        }
        preventDefault() {}
        stopPropagation() {
            this.propagationStopped = !0
        }
        stopImmediatePropagation() {
            this.immediatePropagationStopped = this.propagationStopped = !0
        }
    }
    Object.defineProperty(re.prototype, "interaction", {
        get() {
            return this._interaction._proxy
        },
        set() {}
    });
    const ie = {
        base: {
            preventDefault: "auto",
            deltaSource: "page"
        },
        perAction: {
            enabled: !1,
            origin: {
                x: 0,
                y: 0
            }
        },
        actions: {}
    };
    class oe extends re {
        constructor(t, e, n, r, i, o, s) {
            super(t), this.relatedTarget = null, this.screenX = void 0, this.screenY = void 0, this.button = void 0, this.buttons = void 0, this.ctrlKey = void 0, this.shiftKey = void 0, this.altKey = void 0, this.metaKey = void 0, this.page = void 0, this.client = void 0, this.delta = void 0, this.rect = void 0, this.x0 = void 0, this.y0 = void 0, this.t0 = void 0, this.dt = void 0, this.duration = void 0, this.clientX0 = void 0, this.clientY0 = void 0, this.velocity = void 0, this.speed = void 0, this.swipe = void 0, this.axes = void 0, this.preEnd = void 0, i = i || t.element;
            const a = t.interactable,
                c = (a && a.options || ie).deltaSource,
                l = function(t, e, n) {
                    const r = n && t.options[n],
                        i = ne(r && r.origin || t.options.origin, t, e, [t && e]);
                    return (o = i) && {
                        x: "x" in o ? o.x : o.left,
                        y: "y" in o ? o.y : o.top
                    } || {
                        x: 0,
                        y: 0
                    };
                    var o
                }(a, i, n),
                u = "start" === r,
                h = "end" === r,
                p = u ? this : t.prevEvent,
                d = u ? t.coords.start : h ? {
                    page: p.page,
                    client: p.client,
                    timeStamp: t.coords.cur.timeStamp
                } : t.coords.cur;
            this.page = vt({}, d.page), this.client = vt({}, d.client), this.rect = vt({}, t.rect), this.timeStamp = d.timeStamp, h || (this.page.x -= l.x, this.page.y -= l.y, this.client.x -= l.x, this.client.y -= l.y), this.ctrlKey = e.ctrlKey, this.altKey = e.altKey, this.shiftKey = e.shiftKey, this.metaKey = e.metaKey, this.button = e.button, this.buttons = e.buttons, this.target = i, this.currentTarget = i, this.preEnd = o, this.type = s || n + (r || ""), this.interactable = a, this.t0 = u ? t.pointers[t.pointers.length - 1].downTime : p.t0, this.x0 = t.coords.start.page.x - l.x, this.y0 = t.coords.start.page.y - l.y, this.clientX0 = t.coords.start.client.x - l.x, this.clientY0 = t.coords.start.client.y - l.y, this.delta = u || h ? {
                x: 0,
                y: 0
            } : {
                x: this[c].x - p[c].x,
                y: this[c].y - p[c].y
            }, this.dt = t.coords.delta.timeStamp, this.duration = this.timeStamp - this.t0, this.velocity = vt({}, t.coords.velocity[c]), this.speed = Mt(this.velocity.x, this.velocity.y), this.swipe = h || "inertiastart" === r ? this.getSwipe() : null
        }
        getSwipe() {
            const t = this._interaction;
            if (t.prevEvent.speed < 600 || this.timeStamp - t.prevEvent.timeStamp > 150) return null;
            let e = 180 * Math.atan2(t.prevEvent.velocityY, t.prevEvent.velocityX) / Math.PI;
            e < 0 && (e += 360);
            const n = 112.5 <= e && e < 247.5,
                r = 202.5 <= e && e < 337.5;
            return {
                up: r,
                down: !r && 22.5 <= e && e < 157.5,
                left: n,
                right: !n && (292.5 <= e || e < 67.5),
                angle: e,
                speed: t.prevEvent.speed,
                velocity: {
                    x: t.prevEvent.velocityX,
                    y: t.prevEvent.velocityY
                }
            }
        }
        preventDefault() {}
        stopImmediatePropagation() {
            this.immediatePropagationStopped = this.propagationStopped = !0
        }
        stopPropagation() {
            this.propagationStopped = !0
        }
    }
    Object.defineProperties(oe.prototype, {
        pageX: {
            get() {
                return this.page.x
            },
            set(t) {
                this.page.x = t
            }
        },
        pageY: {
            get() {
                return this.page.y
            },
            set(t) {
                this.page.y = t
            }
        },
        clientX: {
            get() {
                return this.client.x
            },
            set(t) {
                this.client.x = t
            }
        },
        clientY: {
            get() {
                return this.client.y
            },
            set(t) {
                this.client.y = t
            }
        },
        dx: {
            get() {
                return this.delta.x
            },
            set(t) {
                this.delta.x = t
            }
        },
        dy: {
            get() {
                return this.delta.y
            },
            set(t) {
                this.delta.y = t
            }
        },
        velocityX: {
            get() {
                return this.velocity.x
            },
            set(t) {
                this.velocity.x = t
            }
        },
        velocityY: {
            get() {
                return this.velocity.y
            },
            set(t) {
                this.velocity.y = t
            }
        }
    });
    class se {
        constructor(t, e, n, r, i) {
            this.id = void 0, this.pointer = void 0, this.event = void 0, this.downTime = void 0, this.downTarget = void 0, this.id = t, this.pointer = e, this.event = n, this.downTime = r, this.downTarget = i
        }
    }
    let ae = function(t) {
            return t.interactable = "", t.element = "", t.prepared = "", t.pointerIsDown = "", t.pointerWasMoved = "", t._proxy = "", t
        }({}),
        ce = function(t) {
            return t.start = "", t.move = "", t.end = "", t.stop = "", t.interacting = "", t
        }({}),
        le = 0;
    class ue {
        get pointerMoveTolerance() {
            return 1
        }
        constructor(t) {
            this.interactable = null, this.element = null, this.rect = null, this._rects = void 0, this.edges = null, this._scopeFire = void 0, this.prepared = {
                name: null,
                axis: null,
                edges: null
            }, this.pointerType = void 0, this.pointers = [], this.downEvent = null, this.downPointer = {}, this._latestPointer = {
                pointer: null,
                event: null,
                eventTarget: null
            }, this.prevEvent = null, this.pointerIsDown = !1, this.pointerWasMoved = !1, this._interacting = !1, this._ending = !1, this._stopped = !0, this._proxy = void 0, this.simulation = null, this.doMove = te((function(t) {
                this.move(t)
            }), "The interaction.doMove() method has been renamed to interaction.move()"), this.coords = {
                start: {
                    page: {
                        x: 0,
                        y: 0
                    },
                    client: {
                        x: 0,
                        y: 0
                    },
                    timeStamp: 0
                },
                prev: {
                    page: {
                        x: 0,
                        y: 0
                    },
                    client: {
                        x: 0,
                        y: 0
                    },
                    timeStamp: 0
                },
                cur: {
                    page: {
                        x: 0,
                        y: 0
                    },
                    client: {
                        x: 0,
                        y: 0
                    },
                    timeStamp: 0
                },
                delta: {
                    page: {
                        x: 0,
                        y: 0
                    },
                    client: {
                        x: 0,
                        y: 0
                    },
                    timeStamp: 0
                },
                velocity: {
                    page: {
                        x: 0,
                        y: 0
                    },
                    client: {
                        x: 0,
                        y: 0
                    },
                    timeStamp: 0
                }
            }, this._id = le++;
            let {
                pointerType: e,
                scopeFire: n
            } = t;
            this._scopeFire = n, this.pointerType = e;
            const r = this;
            this._proxy = {};
            for (const t in ae) Object.defineProperty(this._proxy, t, {
                get: () => r[t]
            });
            for (const t in ce) Object.defineProperty(this._proxy, t, {
                value: function() {
                    return r[t](...arguments)
                }
            });
            this._scopeFire("interactions:new", {
                interaction: this
            })
        }
        pointerDown(t, e, n) {
            const r = this.updatePointer(t, e, n, !0),
                i = this.pointers[r];
            this._scopeFire("interactions:down", {
                pointer: t,
                event: e,
                eventTarget: n,
                pointerIndex: r,
                pointerInfo: i,
                type: "down",
                interaction: this
            })
        }
        start(t, e, n) {
            return !(this.interacting() || !this.pointerIsDown || this.pointers.length < ("gesture" === t.name ? 2 : 1) || !e.options[t.name].enabled) && (ee(this.prepared, t), this.interactable = e, this.element = n, this.rect = e.getRect(n), this.edges = this.prepared.edges ? vt({}, this.prepared.edges) : {
                left: !0,
                right: !0,
                top: !0,
                bottom: !0
            }, this._stopped = !1, this._interacting = this._doPhase({
                interaction: this,
                event: this.downEvent,
                phase: "start"
            }) && !this._stopped, this._interacting)
        }
        pointerMove(t, e, n) {
            this.simulation || this.modification && this.modification.endResult || this.updatePointer(t, e, n, !1);
            const r = this.coords.cur.page.x === this.coords.prev.page.x && this.coords.cur.page.y === this.coords.prev.page.y && this.coords.cur.client.x === this.coords.prev.client.x && this.coords.cur.client.y === this.coords.prev.client.y;
            let i, o;
            this.pointerIsDown && !this.pointerWasMoved && (i = this.coords.cur.client.x - this.coords.start.client.x, o = this.coords.cur.client.y - this.coords.start.client.y, this.pointerWasMoved = Mt(i, o) > this.pointerMoveTolerance);
            const s = this.getPointerIndex(t),
                a = {
                    pointer: t,
                    pointerIndex: s,
                    pointerInfo: this.pointers[s],
                    event: e,
                    type: "move",
                    eventTarget: n,
                    dx: i,
                    dy: o,
                    duplicate: r,
                    interaction: this
                };
            r || function(t, e) {
                const n = Math.max(e.timeStamp / 1e3, .001);
                t.page.x = e.page.x / n, t.page.y = e.page.y / n, t.client.x = e.client.x / n, t.client.y = e.client.y / n, t.timeStamp = n
            }(this.coords.velocity, this.coords.delta), this._scopeFire("interactions:move", a), r || this.simulation || (this.interacting() && (a.type = null, this.move(a)), this.pointerWasMoved && Ft(this.coords.prev, this.coords.cur))
        }
        move(t) {
            var e;
            t && t.event || ((e = this.coords.delta).page.x = 0, e.page.y = 0, e.client.x = 0, e.client.y = 0), (t = vt({
                pointer: this._latestPointer.pointer,
                event: this._latestPointer.event,
                eventTarget: this._latestPointer.eventTarget,
                interaction: this
            }, t || {})).phase = "move", this._doPhase(t)
        }
        pointerUp(t, e, n, r) {
            let i = this.getPointerIndex(t); - 1 === i && (i = this.updatePointer(t, e, n, !1));
            const o = /cancel$/i.test(e.type) ? "cancel" : "up";
            this._scopeFire(`interactions:${o}`, {
                pointer: t,
                pointerIndex: i,
                pointerInfo: this.pointers[i],
                event: e,
                eventTarget: n,
                type: o,
                curEventTarget: r,
                interaction: this
            }), this.simulation || this.end(e), this.removePointer(t, e)
        }
        documentBlur(t) {
            this.end(t), this._scopeFire("interactions:blur", {
                event: t,
                type: "blur",
                interaction: this
            })
        }
        end(t) {
            let e;
            this._ending = !0, t = t || this._latestPointer.event, this.interacting() && (e = this._doPhase({
                event: t,
                interaction: this,
                phase: "end"
            })), this._ending = !1, !0 === e && this.stop()
        }
        currentAction() {
            return this._interacting ? this.prepared.name : null
        }
        interacting() {
            return this._interacting
        }
        stop() {
            this._scopeFire("interactions:stop", {
                interaction: this
            }), this.interactable = this.element = null, this._interacting = !1, this._stopped = !0, this.prepared.name = this.prevEvent = null
        }
        getPointerIndex(t) {
            const e = Nt(t);
            return "mouse" === this.pointerType || "pen" === this.pointerType ? this.pointers.length - 1 : pt(this.pointers, (t => t.id === e))
        }
        getPointerInfo(t) {
            return this.pointers[this.getPointerIndex(t)]
        }
        updatePointer(t, e, n, r) {
            const i = Nt(t);
            let o = this.getPointerIndex(t),
                s = this.pointers[o];
            var a, c, l;
            return r = !1 !== r && (r || /(down|start)$/i.test(e.type)), s ? s.pointer = t : (s = new se(i, t, e, null, null), o = this.pointers.length, this.pointers.push(s)), Ut(this.coords.cur, this.pointers.map((t => t.pointer)), this._now()), a = this.coords.delta, c = this.coords.prev, l = this.coords.cur, a.page.x = l.page.x - c.page.x, a.page.y = l.page.y - c.page.y, a.client.x = l.client.x - c.client.x, a.client.y = l.client.y - c.client.y, a.timeStamp = l.timeStamp - c.timeStamp, r && (this.pointerIsDown = !0, s.downTime = this.coords.cur.timeStamp, s.downTarget = n, Dt(this.downPointer, t), this.interacting() || (Ft(this.coords.start, this.coords.cur), Ft(this.coords.prev, this.coords.cur), this.downEvent = e, this.pointerWasMoved = !1)), this._updateLatestPointer(t, e, n), this._scopeFire("interactions:update-pointer", {
                pointer: t,
                event: e,
                eventTarget: n,
                down: r,
                pointerInfo: s,
                pointerIndex: o,
                interaction: this
            }), o
        }
        removePointer(t, e) {
            const n = this.getPointerIndex(t);
            if (-1 === n) return;
            const r = this.pointers[n];
            this._scopeFire("interactions:remove-pointer", {
                pointer: t,
                event: e,
                eventTarget: null,
                pointerIndex: n,
                pointerInfo: r,
                interaction: this
            }), this.pointers.splice(n, 1), this.pointerIsDown = !1
        }
        _updateLatestPointer(t, e, n) {
            this._latestPointer.pointer = t, this._latestPointer.event = e, this._latestPointer.eventTarget = n
        }
        destroy() {
            this._latestPointer.pointer = null, this._latestPointer.event = null, this._latestPointer.eventTarget = null
        }
        _createPreparedEvent(t, e, n, r) {
            return new oe(this, t, this.prepared.name, e, this.element, n, r)
        }
        _fireEvent(t) {
            var e;
            null == (e = this.interactable) || e.fire(t), (!this.prevEvent || t.timeStamp >= this.prevEvent.timeStamp) && (this.prevEvent = t)
        }
        _doPhase(t) {
            const {
                event: e,
                phase: n,
                preEnd: r,
                type: i
            } = t, {
                rect: o
            } = this;
            o && "move" === n && (! function(t, e, n) {
                t.left && (e.left += n.x), t.right && (e.right += n.x), t.top && (e.top += n.y), t.bottom && (e.bottom += n.y), e.width = e.right - e.left, e.height = e.bottom - e.top
            }(this.edges, o, this.coords.delta[this.interactable.options.deltaSource]), o.width = o.right - o.left, o.height = o.bottom - o.top);
            if (!1 === this._scopeFire(`interactions:before-action-${n}`, t)) return !1;
            const s = t.iEvent = this._createPreparedEvent(e, n, r, i);
            return this._scopeFire(`interactions:action-${n}`, t), "start" === n && (this.prevEvent = s), this._fireEvent(s), this._scopeFire(`interactions:after-action-${n}`, t), !0
        }
        _now() {
            return Date.now()
        }
    }
    const he = {
        methodOrder: ["simulationResume", "mouseOrPen", "hasPointer", "idle"],
        search(t) {
            for (const e of he.methodOrder) {
                const n = he[e](t);
                if (n) return n
            }
            return null
        },
        simulationResume(t) {
            let {
                pointerType: e,
                eventType: n,
                eventTarget: r,
                scope: i
            } = t;
            if (!/down|start/i.test(n)) return null;
            for (const t of i.interactions.list) {
                let n = r;
                if (t.simulation && t.simulation.allowResume && t.pointerType === e)
                    for (; n;) {
                        if (n === t.element) return t;
                        n = $t(n)
                    }
            }
            return null
        },
        mouseOrPen(t) {
            let e, {
                pointerId: n,
                pointerType: r,
                eventType: i,
                scope: o
            } = t;
            if ("mouse" !== r && "pen" !== r) return null;
            for (const t of o.interactions.list)
                if (t.pointerType === r) {
                    if (t.simulation && !pe(t, n)) continue;
                    if (t.interacting()) return t;
                    e || (e = t)
                } if (e) return e;
            for (const t of o.interactions.list)
                if (!(t.pointerType !== r || /down/i.test(i) && t.simulation)) return t;
            return null
        },
        hasPointer(t) {
            let {
                pointerId: e,
                scope: n
            } = t;
            for (const t of n.interactions.list)
                if (pe(t, e)) return t;
            return null
        },
        idle(t) {
            let {
                pointerType: e,
                scope: n
            } = t;
            for (const t of n.interactions.list) {
                if (1 === t.pointers.length) {
                    const e = t.interactable;
                    if (e && (!e.options.gesture || !e.options.gesture.enabled)) continue
                } else if (t.pointers.length >= 2) continue;
                if (!t.interacting() && e === t.pointerType) return t
            }
            return null
        }
    };

    function pe(t, e) {
        return t.pointers.some((t => {
            let {
                id: n
            } = t;
            return n === e
        }))
    }
    const de = ["pointerDown", "pointerMove", "pointerUp", "updatePointer", "removePointer", "windowBlur"];

    function fe(t, e) {
        return function(n) {
            const r = e.interactions.list,
                i = (o = n, rt.string(o.pointerType) ? o.pointerType : rt.number(o.pointerType) ? [void 0, void 0, "touch", "pen", "mouse"][o.pointerType] : /touch/.test(o.type || "") || o instanceof at.Touch ? "touch" : "mouse");
            var o;
            const [s, a] = Bt(n), c = [];
            if (/^touch/.test(n.type)) {
                e.prevTouchTime = e.now();
                for (const t of n.changedTouches) {
                    const r = {
                            pointer: t,
                            pointerId: Nt(t),
                            pointerType: i,
                            eventType: n.type,
                            eventTarget: s,
                            curEventTarget: a,
                            scope: e
                        },
                        o = ve(r);
                    c.push([r.pointer, r.eventTarget, r.curEventTarget, o])
                }
            } else {
                let t = !1;
                if (!lt.supportsPointerEvent && /mouse/.test(n.type)) {
                    for (let e = 0; e < r.length && !t; e++) t = "mouse" !== r[e].pointerType && r[e].pointerIsDown;
                    t = t || e.now() - e.prevTouchTime < 500 || 0 === n.timeStamp
                }
                if (!t) {
                    const t = {
                            pointer: n,
                            pointerId: Nt(n),
                            pointerType: i,
                            eventType: n.type,
                            curEventTarget: a,
                            eventTarget: s,
                            scope: e
                        },
                        r = ve(t);
                    c.push([t.pointer, t.eventTarget, t.curEventTarget, r])
                }
            }
            for (const [e, r, i, o] of c) o[t](e, n, r, i)
        }
    }

    function ve(t) {
        const {
            pointerType: e,
            scope: n
        } = t, r = {
            interaction: he.search(t),
            searchDetails: t
        };
        return n.fire("interactions:find", r), r.interaction || n.interactions.new({
            pointerType: e
        })
    }

    function ge(t, e) {
        let {
            doc: n,
            scope: r,
            options: i
        } = t;
        const {
            interactions: {
                docEvents: o
            },
            events: s
        } = r, a = s[e];
        r.browser.isIOS && !i.events && (i.events = {
            passive: !1
        });
        for (const t in s.delegatedEvents) a(n, t, s.delegateListener), a(n, t, s.delegateUseCapture, !0);
        const c = i && i.events;
        for (const {
                type: t,
                listener: e
            }
            of o) a(n, t, e, c)
    }
    const me = {
        id: "core/interactions",
        install: function(t) {
            const e = {};
            for (const n of de) e[n] = fe(n, t);
            const n = lt.pEventTypes;
            let r;

            function i() {
                for (const e of t.interactions.list)
                    if (e.pointerIsDown && "touch" === e.pointerType && !e._interacting)
                        for (const n of e.pointers) t.documents.some((t => {
                            let {
                                doc: e
                            } = t;
                            return Pt(e, n.downTarget)
                        })) || e.removePointer(n.pointer, n.event)
            }
            r = at.PointerEvent ? [{
                type: n.down,
                listener: i
            }, {
                type: n.down,
                listener: e.pointerDown
            }, {
                type: n.move,
                listener: e.pointerMove
            }, {
                type: n.up,
                listener: e.pointerUp
            }, {
                type: n.cancel,
                listener: e.pointerUp
            }] : [{
                type: "mousedown",
                listener: e.pointerDown
            }, {
                type: "mousemove",
                listener: e.pointerMove
            }, {
                type: "mouseup",
                listener: e.pointerUp
            }, {
                type: "touchstart",
                listener: i
            }, {
                type: "touchstart",
                listener: e.pointerDown
            }, {
                type: "touchmove",
                listener: e.pointerMove
            }, {
                type: "touchend",
                listener: e.pointerUp
            }, {
                type: "touchcancel",
                listener: e.pointerUp
            }], r.push({
                type: "blur",
                listener(e) {
                    for (const n of t.interactions.list) n.documentBlur(e)
                }
            }), t.prevTouchTime = 0, t.Interaction = class extends ue {
                get pointerMoveTolerance() {
                    return t.interactions.pointerMoveTolerance
                }
                set pointerMoveTolerance(e) {
                    t.interactions.pointerMoveTolerance = e
                }
                _now() {
                    return t.now()
                }
            }, t.interactions = {
                list: [],
                new(e) {
                    e.scopeFire = (e, n) => t.fire(e, n);
                    const n = new t.Interaction(e);
                    return t.interactions.list.push(n), n
                },
                listeners: e,
                docEvents: r,
                pointerMoveTolerance: 1
            }, t.usePlugin(Jt)
        },
        listeners: {
            "scope:add-document": t => ge(t, "add"),
            "scope:remove-document": t => ge(t, "remove"),
            "interactable:unset": (t, e) => {
                let {
                    interactable: n
                } = t;
                for (let t = e.interactions.list.length - 1; t >= 0; t--) {
                    const r = e.interactions.list[t];
                    r.interactable === n && (r.stop(), e.fire("interactions:destroy", {
                        interaction: r
                    }), r.destroy(), e.interactions.list.length > 2 && e.interactions.list.splice(t, 1))
                }
            }
        },
        onDocSignal: ge,
        doOnInteractions: fe,
        methodNames: de
    };

    function ye(t, e) {
        if (e.phaselessTypes[t]) return !0;
        for (const n in e.map)
            if (0 === t.indexOf(n) && t.substr(n.length) in e.phases) return !0;
        return !1
    }
    var we = function(t) {
        return t[t.On = 0] = "On", t[t.Off = 1] = "Off", t
    }(we || {});
    class be {
        get _defaults() {
            return {
                base: {},
                perAction: {},
                actions: {}
            }
        }
        constructor(t, e, n, r) {
            this.target = void 0, this.options = void 0, this._actions = void 0, this.events = new Et, this._context = void 0, this._win = void 0, this._doc = void 0, this._scopeEvents = void 0, this._actions = e.actions, this.target = t, this._context = e.context || n, this._win = tt(Rt(t) ? this._context : t), this._doc = this._win.document, this._scopeEvents = r, this.set(e)
        }
        setOnEvents(t, e) {
            return rt.func(e.onstart) && this.on(`${t}start`, e.onstart), rt.func(e.onmove) && this.on(`${t}move`, e.onmove), rt.func(e.onend) && this.on(`${t}end`, e.onend), rt.func(e.oninertiastart) && this.on(`${t}inertiastart`, e.oninertiastart), this
        }
        updatePerActionListeners(t, e, n) {
            var r;
            const i = null == (r = this._actions.map[t]) ? void 0 : r.filterEventType,
                o = t => (null == i || i(t)) && ye(t, this._actions);
            (rt.array(e) || rt.object(e)) && this._onOff(we.Off, t, e, void 0, o), (rt.array(n) || rt.object(n)) && this._onOff(we.On, t, n, void 0, o)
        }
        setPerAction(t, e) {
            const n = this._defaults;
            for (const r in e) {
                const i = r,
                    o = this.options[t],
                    s = e[i];
                "listeners" === i && this.updatePerActionListeners(t, o.listeners, s), rt.array(s) ? o[i] = ht(s) : rt.plainObject(s) ? (o[i] = vt(o[i] || {}, ft(s)), rt.object(n.perAction[i]) && "enabled" in n.perAction[i] && (o[i].enabled = !1 !== s.enabled)) : rt.bool(s) && rt.object(n.perAction[i]) ? o[i].enabled = s : o[i] = s
            }
        }
        getRect(t) {
            return t = t || (rt.element(this.target) ? this.target : null), rt.string(this.target) && (t = t || this._context.querySelector(this.target)), Ot(t)
        }
        rectChecker(t) {
            return rt.func(t) ? (this.getRect = e => {
                const n = vt({}, t.apply(this, e));
                return "width" in n || (n.width = n.right - n.left, n.height = n.bottom - n.top), n
            }, this) : null === t ? (delete this.getRect, this) : this.getRect
        }
        _backCompatOption(t, e) {
            if (Rt(e) || rt.object(e)) {
                this.options[t] = e;
                for (const n in this._actions.map) this.options[n][t] = e;
                return this
            }
            return this.options[t]
        }
        origin(t) {
            return this._backCompatOption("origin", t)
        }
        deltaSource(t) {
            return "page" === t || "client" === t ? (this.options.deltaSource = t, this) : this.options.deltaSource
        }
        getAllElements() {
            const {
                target: t
            } = this;
            return rt.string(t) ? Array.from(this._context.querySelectorAll(t)) : rt.func(t) && t.getAllElements ? t.getAllElements() : rt.element(t) ? [t] : []
        }
        context() {
            return this._context
        }
        inContext(t) {
            return this._context === t.ownerDocument || Pt(this._context, t)
        }
        testIgnoreAllow(t, e, n) {
            return !this.testIgnore(t.ignoreFrom, e, n) && this.testAllow(t.allowFrom, e, n)
        }
        testAllow(t, e, n) {
            return !t || !!rt.element(n) && (rt.string(t) ? At(n, t, e) : !!rt.element(t) && Pt(t, n))
        }
        testIgnore(t, e, n) {
            return !(!t || !rt.element(n)) && (rt.string(t) ? At(n, t, e) : !!rt.element(t) && Pt(t, n))
        }
        fire(t) {
            return this.events.fire(t), this
        }
        _onOff(t, e, n, r, i) {
            rt.object(e) && !rt.array(e) && (r = n, n = null);
            const o = bt(e, n, i);
            for (let e in o) {
                "wheel" === e && (e = lt.wheelEvent);
                for (const n of o[e]) ye(e, this._actions) ? this.events[t === we.On ? "on" : "off"](e, n) : rt.string(this.target) ? this._scopeEvents[t === we.On ? "addDelegate" : "removeDelegate"](this.target, this._context, e, n, r) : this._scopeEvents[t === we.On ? "add" : "remove"](this.target, e, n, r)
            }
            return this
        }
        on(t, e, n) {
            return this._onOff(we.On, t, e, n)
        }
        off(t, e, n) {
            return this._onOff(we.Off, t, e, n)
        }
        set(t) {
            const e = this._defaults;
            rt.object(t) || (t = {}), this.options = ft(e.base);
            for (const n in this._actions.methodDict) {
                const r = n,
                    i = this._actions.methodDict[r];
                this.options[r] = {}, this.setPerAction(r, vt(vt({}, e.perAction), e.actions[r])), this[i](t[r])
            }
            for (const e in t) "getRect" !== e ? rt.func(this[e]) && this[e](t[e]) : this.rectChecker(t.getRect);
            return this
        }
        unset() {
            if (rt.string(this.target))
                for (const t in this._scopeEvents.delegatedEvents) {
                    const e = this._scopeEvents.delegatedEvents[t];
                    for (let n = e.length - 1; n >= 0; n--) {
                        const {
                            selector: r,
                            context: i,
                            listeners: o
                        } = e[n];
                        r === this.target && i === this._context && e.splice(n, 1);
                        for (let e = o.length - 1; e >= 0; e--) this._scopeEvents.removeDelegate(this.target, this._context, t, o[e][0], o[e][1])
                    }
                } else this._scopeEvents.remove(this.target, "all")
        }
    }
    class xe {
        constructor(t) {
            this.list = [], this.selectorMap = {}, this.scope = void 0, this.scope = t, t.addListeners({
                "interactable:unset": t => {
                    let {
                        interactable: e
                    } = t;
                    const {
                        target: n
                    } = e, r = rt.string(n) ? this.selectorMap[n] : n[this.scope.id], i = pt(r, (t => t === e));
                    r.splice(i, 1)
                }
            })
        }
        new(t, e) {
            e = vt(e || {}, {
                actions: this.scope.actions
            });
            const n = new this.scope.Interactable(t, e, this.scope.document, this.scope.events);
            return this.scope.addDocument(n._doc), this.list.push(n), rt.string(t) ? (this.selectorMap[t] || (this.selectorMap[t] = []), this.selectorMap[t].push(n)) : (n.target[this.scope.id] || Object.defineProperty(t, this.scope.id, {
                value: [],
                configurable: !0
            }), t[this.scope.id].push(n)), this.scope.fire("interactable:new", {
                target: t,
                options: e,
                interactable: n,
                win: this.scope._win
            }), n
        }
        getExisting(t, e) {
            const n = e && e.context || this.scope.document,
                r = rt.string(t),
                i = r ? this.selectorMap[t] : t[this.scope.id];
            if (i) return dt(i, (e => e._context === n && (r || e.inContext(t))))
        }
        forEachMatch(t, e) {
            for (const n of this.list) {
                let r;
                if ((rt.string(n.target) ? rt.element(t) && St(t, n.target) : t === n.target) && n.inContext(t) && (r = e(n)), void 0 !== r) return r
            }
        }
    }

    function Te(t) {
        return t && t.replace(/\/.*$/, "")
    }
    const Ee = new class {
            constructor() {
                this.id = `__interact_scope_${Math.floor(100*Math.random())}`, this.isInitialized = !1, this.listenerMaps = [], this.browser = lt, this.defaults = ft(ie), this.Eventable = Et, this.actions = {
                    map: {},
                    phases: {
                        start: !0,
                        move: !0,
                        end: !0
                    },
                    methodDict: {},
                    phaselessTypes: {}
                }, this.interactStatic = function(t) {
                    const e = (n, r) => {
                        let i = t.interactables.getExisting(n, r);
                        return i || (i = t.interactables.new(n, r), i.events.global = e.globalEvents), i
                    };
                    return e.getPointerAverage = Wt, e.getTouchBBox = Gt, e.getTouchDistance = Vt, e.getTouchAngle = zt, e.getElementRect = Ot, e.getElementClientRect = _t, e.matchesSelector = St, e.closest = Ct, e.globalEvents = {}, e.version = "1.10.27", e.scope = t, e.use = function(t, e) {
                        return this.scope.usePlugin(t, e), this
                    }, e.isSet = function(t, e) {
                        return !!this.scope.interactables.get(t, e && e.context)
                    }, e.on = te((function(t, e, n) {
                        if (rt.string(t) && -1 !== t.search(" ") && (t = t.trim().split(/ +/)), rt.array(t)) {
                            for (const r of t) this.on(r, e, n);
                            return this
                        }
                        if (rt.object(t)) {
                            for (const n in t) this.on(n, t[n], e);
                            return this
                        }
                        return ye(t, this.scope.actions) ? this.globalEvents[t] ? this.globalEvents[t].push(e) : this.globalEvents[t] = [e] : this.scope.events.add(this.scope.document, t, e, {
                            options: n
                        }), this
                    }), "The interact.on() method is being deprecated"), e.off = te((function(t, e, n) {
                        if (rt.string(t) && -1 !== t.search(" ") && (t = t.trim().split(/ +/)), rt.array(t)) {
                            for (const r of t) this.off(r, e, n);
                            return this
                        }
                        if (rt.object(t)) {
                            for (const n in t) this.off(n, t[n], e);
                            return this
                        }
                        if (ye(t, this.scope.actions)) {
                            let n;
                            t in this.globalEvents && -1 !== (n = this.globalEvents[t].indexOf(e)) && this.globalEvents[t].splice(n, 1)
                        } else this.scope.events.remove(this.scope.document, t, e, n);
                        return this
                    }), "The interact.off() method is being deprecated"), e.debug = function() {
                        return this.scope
                    }, e.supportsTouch = function() {
                        return lt.supportsTouch
                    }, e.supportsPointerEvent = function() {
                        return lt.supportsPointerEvent
                    }, e.stop = function() {
                        for (const t of this.scope.interactions.list) t.stop();
                        return this
                    }, e.pointerMoveTolerance = function(t) {
                        return rt.number(t) ? (this.scope.interactions.pointerMoveTolerance = t, this) : this.scope.interactions.pointerMoveTolerance
                    }, e.addDocument = function(t, e) {
                        this.scope.addDocument(t, e)
                    }, e.removeDocument = function(t) {
                        this.scope.removeDocument(t)
                    }, e
                }(this), this.InteractEvent = oe, this.Interactable = void 0, this.interactables = new xe(this), this._win = void 0, this.document = void 0, this.window = void 0, this.documents = [], this._plugins = {
                    list: [],
                    map: {}
                }, this.onWindowUnload = t => this.removeDocument(t.target);
                const t = this;
                this.Interactable = class extends be {
                    get _defaults() {
                        return t.defaults
                    }
                    set(e) {
                        return super.set(e), t.fire("interactable:set", {
                            options: e,
                            interactable: this
                        }), this
                    }
                    unset() {
                        super.unset();
                        const e = t.interactables.list.indexOf(this);
                        e < 0 || (t.interactables.list.splice(e, 1), t.fire("interactable:unset", {
                            interactable: this
                        }))
                    }
                }
            }
            addListeners(t, e) {
                this.listenerMaps.push({
                    id: e,
                    map: t
                })
            }
            fire(t, e) {
                for (const {
                        map: {
                            [t]: n
                        }
                    }
                    of this.listenerMaps)
                    if (n && !1 === n(e, this, t)) return !1
            }
            init(t) {
                return this.isInitialized ? this : function(t, e) {
                    t.isInitialized = !0, rt.window(e) && J(e);
                    return at.init(e), lt.init(e), wt.init(e), t.window = e, t.document = e.document, t.usePlugin(me), t.usePlugin(Kt), t
                }(this, t)
            }
            pluginIsInstalled(t) {
                const {
                    id: e
                } = t;
                return e ? !!this._plugins.map[e] : -1 !== this._plugins.list.indexOf(t)
            }
            usePlugin(t, e) {
                if (!this.isInitialized) return this;
                if (this.pluginIsInstalled(t)) return this;
                if (t.id && (this._plugins.map[t.id] = t), this._plugins.list.push(t), t.install && t.install(this, e), t.listeners && t.before) {
                    let e = 0;
                    const n = this.listenerMaps.length,
                        r = t.before.reduce(((t, e) => (t[e] = !0, t[Te(e)] = !0, t)), {});
                    for (; e < n; e++) {
                        const t = this.listenerMaps[e].id;
                        if (t && (r[t] || r[Te(t)])) break
                    }
                    this.listenerMaps.splice(e, 0, {
                        id: t.id,
                        map: t.listeners
                    })
                } else t.listeners && this.listenerMaps.push({
                    id: t.id,
                    map: t.listeners
                });
                return this
            }
            addDocument(t, e) {
                if (-1 !== this.getDocIndex(t)) return !1;
                const n = tt(t);
                e = e ? vt({}, e) : {}, this.documents.push({
                    doc: t,
                    options: e
                }), this.events.documents.push(t), t !== this.document && this.events.add(n, "unload", this.onWindowUnload), this.fire("scope:add-document", {
                    doc: t,
                    window: n,
                    scope: this,
                    options: e
                })
            }
            removeDocument(t) {
                const e = this.getDocIndex(t),
                    n = tt(t),
                    r = this.documents[e].options;
                this.events.remove(n, "unload", this.onWindowUnload), this.documents.splice(e, 1), this.events.documents.splice(e, 1), this.fire("scope:remove-document", {
                    doc: t,
                    window: n,
                    scope: this,
                    options: r
                })
            }
            getDocIndex(t) {
                for (let e = 0; e < this.documents.length; e++)
                    if (this.documents[e].doc === t) return e;
                return -1
            }
            getDocOptions(t) {
                const e = this.getDocIndex(t);
                return -1 === e ? null : this.documents[e].options
            }
            now() {
                return (this.window.Date || Date).now()
            }
        },
        Pe = Ee.interactStatic,
        Ce = "undefined" != typeof globalThis ? globalThis : window;

    function $e(t) {
        return rt.bool(t) ? (this.options.styleCursor = t, this) : null === t ? (delete this.options.styleCursor, this) : this.options.styleCursor
    }

    function Se(t) {
        return rt.func(t) ? (this.options.actionChecker = t, this) : null === t ? (delete this.options.actionChecker, this) : this.options.actionChecker
    }
    Ee.init(Ce), Pe.use(st);
    var Ae = {
        id: "auto-start/interactableMethods",
        install: function(t) {
            const {
                Interactable: e
            } = t;
            e.prototype.getAction = function(e, n, r, i) {
                const o = function(t, e, n, r, i) {
                    const o = t.getRect(r),
                        s = e.buttons || {
                            0: 1,
                            1: 4,
                            3: 8,
                            4: 16
                        } [e.button],
                        a = {
                            action: null,
                            interactable: t,
                            interaction: n,
                            element: r,
                            rect: o,
                            buttons: s
                        };
                    return i.fire("auto-start:check", a), a.action
                }(this, n, r, i, t);
                return this.options.actionChecker ? this.options.actionChecker(e, n, o, this, i, r) : o
            }, e.prototype.ignoreFrom = te((function(t) {
                return this._backCompatOption("ignoreFrom", t)
            }), "Interactable.ignoreFrom() has been deprecated. Use Interactble.draggable({ignoreFrom: newValue})."), e.prototype.allowFrom = te((function(t) {
                return this._backCompatOption("allowFrom", t)
            }), "Interactable.allowFrom() has been deprecated. Use Interactble.draggable({allowFrom: newValue})."), e.prototype.actionChecker = Se, e.prototype.styleCursor = $e
        }
    };

    function Ie(t, e, n, r, i) {
        return e.testIgnoreAllow(e.options[t.name], n, r) && e.options[t.name].enabled && ke(e, n, t, i) ? t : null
    }

    function _e(t, e, n, r, i, o, s) {
        for (let a = 0, c = r.length; a < c; a++) {
            const c = r[a],
                l = i[a],
                u = c.getAction(e, n, t, l);
            if (!u) continue;
            const h = Ie(u, c, l, o, s);
            if (h) return {
                action: h,
                interactable: c,
                element: l
            }
        }
        return {
            action: null,
            interactable: null,
            element: null
        }
    }

    function Oe(t, e, n, r, i) {
        let o = [],
            s = [],
            a = r;

        function c(t) {
            o.push(t), s.push(a)
        }
        for (; rt.element(a);) {
            o = [], s = [], i.interactables.forEachMatch(a, c);
            const l = _e(t, e, n, o, s, r, i);
            if (l.action && !l.interactable.options[l.action.name].manualStart) return l;
            a = $t(a)
        }
        return {
            action: null,
            interactable: null,
            element: null
        }
    }

    function Re(t, e, n) {
        let {
            action: r,
            interactable: i,
            element: o
        } = e;
        r = r || {
            name: null
        }, t.interactable = i, t.element = o, ee(t.prepared, r), t.rect = i && r.name ? i.getRect(o) : null, Fe(t, n), n.fire("autoStart:prepared", {
            interaction: t
        })
    }

    function ke(t, e, n, r) {
        const i = t.options,
            o = i[n.name].max,
            s = i[n.name].maxPerElement,
            a = r.autoStart.maxInteractions;
        let c = 0,
            l = 0,
            u = 0;
        if (!(o && s && a)) return !1;
        for (const i of r.interactions.list) {
            const r = i.prepared.name;
            if (i.interacting()) {
                if (c++, c >= a) return !1;
                if (i.interactable === t) {
                    if (l += r === n.name ? 1 : 0, l >= o) return !1;
                    if (i.element === e && (u++, r === n.name && u >= s)) return !1
                }
            }
        }
        return a > 0
    }

    function De(t, e) {
        return rt.number(t) ? (e.autoStart.maxInteractions = t, this) : e.autoStart.maxInteractions
    }

    function Me(t, e, n) {
        const {
            cursorElement: r
        } = n.autoStart;
        r && r !== t && (r.style.cursor = ""), t.ownerDocument.documentElement.style.cursor = e, t.style.cursor = e, n.autoStart.cursorElement = e ? t : null
    }

    function Fe(t, e) {
        const {
            interactable: n,
            element: r,
            prepared: i
        } = t;
        if ("mouse" !== t.pointerType || !n || !n.options.styleCursor) return void(e.autoStart.cursorElement && Me(e.autoStart.cursorElement, "", e));
        let o = "";
        if (i.name) {
            const s = n.options[i.name].cursorChecker;
            o = rt.func(s) ? s(i, n, r, t._interacting) : e.actions.map[i.name].getCursor(i)
        }
        Me(t.element, o || "", e)
    }
    const Le = {
        id: "auto-start/base",
        before: ["actions"],
        install: function(t) {
            const {
                interactStatic: e,
                defaults: n
            } = t;
            t.usePlugin(Ae), n.base.actionChecker = null, n.base.styleCursor = !0, vt(n.perAction, {
                manualStart: !1,
                max: 1 / 0,
                maxPerElement: 1,
                allowFrom: null,
                ignoreFrom: null,
                mouseButtons: 1
            }), e.maxInteractions = e => De(e, t), t.autoStart = {
                maxInteractions: 1 / 0,
                withinInteractionLimit: ke,
                cursorElement: null
            }
        },
        listeners: {
            "interactions:down": function(t, e) {
                let {
                    interaction: n,
                    pointer: r,
                    event: i,
                    eventTarget: o
                } = t;
                if (n.interacting()) return;
                Re(n, Oe(n, r, i, o, e), e)
            },
            "interactions:move": (t, e) => {
                ! function(t, e) {
                    let {
                        interaction: n,
                        pointer: r,
                        event: i,
                        eventTarget: o
                    } = t;
                    if ("mouse" !== n.pointerType || n.pointerIsDown || n.interacting()) return;
                    Re(n, Oe(n, r, i, o, e), e)
                }(t, e),
                function(t, e) {
                    const {
                        interaction: n
                    } = t;
                    if (!n.pointerIsDown || n.interacting() || !n.pointerWasMoved || !n.prepared.name) return;
                    e.fire("autoStart:before-start", t);
                    const {
                        interactable: r
                    } = n, i = n.prepared.name;
                    i && r && (r.options[i].manualStart || !ke(r, n.element, n.prepared, e) ? n.stop() : (n.start(n.prepared, r, n.element), Fe(n, e)))
                }(t, e)
            },
            "interactions:stop": function(t, e) {
                let {
                    interaction: n
                } = t;
                const {
                    interactable: r
                } = n;
                r && r.options.styleCursor && Me(n.element, "", e)
            }
        },
        maxInteractions: De,
        withinInteractionLimit: ke,
        validateAction: Ie
    };
    var je = {
        id: "auto-start/dragAxis",
        listeners: {
            "autoStart:before-start": function(t, e) {
                let {
                    interaction: n,
                    eventTarget: r,
                    dx: i,
                    dy: o
                } = t;
                if ("drag" !== n.prepared.name) return;
                const s = Math.abs(i),
                    a = Math.abs(o),
                    c = n.interactable.options.drag,
                    l = c.startAxis,
                    u = s > a ? "x" : s < a ? "y" : "xy";
                if (n.prepared.axis = "start" === c.lockAxis ? u[0] : c.lockAxis, "xy" !== u && "xy" !== l && l !== u) {
                    n.prepared.name = null;
                    let t = r;
                    const i = function(i) {
                        if (i === n.interactable) return;
                        const o = n.interactable.options.drag;
                        if (!o.manualStart && i.testIgnoreAllow(o, t, r)) {
                            const o = i.getAction(n.downPointer, n.downEvent, n, t);
                            if (o && "drag" === o.name && function(t, e) {
                                    if (!e) return !1;
                                    const n = e.options.drag.startAxis;
                                    return "xy" === t || "xy" === n || n === t
                                }(u, i) && Le.validateAction(o, i, t, r, e)) return i
                        }
                    };
                    for (; rt.element(t);) {
                        const r = e.interactables.forEachMatch(t, i);
                        if (r) {
                            n.prepared.name = "drag", n.interactable = r, n.element = t;
                            break
                        }
                        t = $t(t)
                    }
                }
            }
        }
    };

    function Ne(t) {
        const e = t.prepared && t.prepared.name;
        if (!e) return null;
        const n = t.interactable.options;
        return n[e].hold || n[e].delay
    }
    const Ue = {
        id: "auto-start/hold",
        install: function(t) {
            const {
                defaults: e
            } = t;
            t.usePlugin(Le), e.perAction.hold = 0, e.perAction.delay = 0
        },
        listeners: {
            "interactions:new": t => {
                let {
                    interaction: e
                } = t;
                e.autoStartHoldTimer = null
            },
            "autoStart:prepared": t => {
                let {
                    interaction: e
                } = t;
                const n = Ne(e);
                n > 0 && (e.autoStartHoldTimer = setTimeout((() => {
                    e.start(e.prepared, e.interactable, e.element)
                }), n))
            },
            "interactions:move": t => {
                let {
                    interaction: e,
                    duplicate: n
                } = t;
                e.autoStartHoldTimer && e.pointerWasMoved && !n && (clearTimeout(e.autoStartHoldTimer), e.autoStartHoldTimer = null)
            },
            "autoStart:before-start": t => {
                let {
                    interaction: e
                } = t;
                Ne(e) > 0 && (e.prepared.name = null)
            }
        },
        getHoldDuration: Ne
    };
    var He = {
        id: "auto-start",
        install(t) {
            t.usePlugin(Le), t.usePlugin(Ue), t.usePlugin(je)
        }
    };
    Pe.use(He);
    const We = 2e3,
        Ge = /iPad|iPhone|iPod/.test(navigator.userAgent) || "MacIntel" === navigator.platform && navigator.maxTouchPoints > 1,
        Ve = /iPhone|iPod/.test(navigator.userAgent) || "MacIntel" === navigator.platform && navigator.maxTouchPoints > 1;
    return class {
        #t;
        #e;
        #n;
        #r;
        #i = {
            scans: 0,
            time: null
        };
        constructor(e) {
            this.#t = Object.assign({
                debug: !1,
                allowedSymbologies: [],
                useFallback: !1,
                useWorker: !0,
                beepOnScan: !0,
                resolution: {},
                workerPath: null,
                binaryPath: null,
                preview: {}
            }, e), this.#t.resolution = Object.assign({
                width: 1920,
                height: 1080
            }, this.#t.resolution), this.#t.preview = Object.assign({
                enabled: !0,
                draggable: !1,
                mirrored: !0,
                hud: !0,
                size: 240,
                position: "bottom-right",
                padding: 20,
                radius: 6,
                zIndex: 1e3
            }, this.#t.preview), this.#e = {
                devices: [],
                current: null,
                stream: null,
                video: null,
                buffer: null,
                history: new Map,
                audio: new AudioContext,
                emitter: new t,
                detector: null,
                width: 0,
                height: 0,
                orientation: 0 === screen.orientation.angle ? "normal" : "rotated"
            }, this.#r = {
                width: 0,
                height: 0,
                container: null,
                hud: null,
                video: null,
                polygons: new Map
            }, this.#n = {
                playing: !1,
                mirrored: !1,
                changing: !1
            };
            const n = void 0 !== {
                url: "undefined" == typeof document && "undefined" == typeof location ? require("url").pathToFileURL(__filename).href : "undefined" == typeof document ? location.href : document.currentScript && document.currentScript.src || new URL("webcam-barcode-scanner.umd.js", document.baseURI).href
            } ? "undefined" == typeof document && "undefined" == typeof location ? require("url").pathToFileURL(__filename).href : "undefined" == typeof document ? location.href : document.currentScript && document.currentScript.src || new URL("webcam-barcode-scanner.umd.js", document.baseURI).href : document.currentScript.src;
            null === this.#t.workerPath && (this.#t.workerPath = "webcam-barcode-scanner.worker.js", n && (this.#t.workerPath = n.replace(/webcam-barcode-scanner(\..*)?\.js/, this.#t.workerPath))), null === this.#t.binaryPath && (this.#t.binaryPath = this.#t.workerPath.replace("webcam-barcode-scanner.worker.js", "webcam-barcode-scanner.wasm")), "suspended" === this.#e.audio.state && this.#e.audio.resume(), this.#o(), this.#s(), screen.orientation.addEventListener("change", (t => {
                this.#a()
            }))
        }
        async reconnect(t) {
            if (await this.#c(), null == this.#e.detector) return;
            let e = !0;
            t.deviceId && (e = {
                width: this.#t.resolution.width,
                height: this.#t.resolution.height,
                deviceId: {
                    exact: t.deviceId
                }
            });
            let n = await navigator.mediaDevices.getUserMedia({
                video: e
            });
            if (n) {
                let e = "front",
                    r = n.getVideoTracks();
                for (let t of r) {
                    if (!t.getCapabilities) continue;
                    let n = t.getCapabilities();
                    n.facingMode && (e = 0 == n.facingMode.length || "user" == n.facingMode[0] ? "front" : "back")
                }
                this.#e.stream = n, this.#e.current = t.deviceId, this.#n.mirrored = "front" == e, await this.#l(), this.#u(n, t.deviceId)
            }
        }
        async connect() {
            if (await this.#c(), null == this.#e.detector) return;
            let t = await navigator.mediaDevices.getUserMedia({
                video: this.#t.resolution
            });
            if (t) {
                let e = null,
                    n = "front",
                    r = t.getVideoTracks();
                for (let t of r) {
                    if (!t.getCapabilities) continue;
                    let r = t.getCapabilities();
                    r.facingMode && (n = 0 == r.facingMode.length || "user" == r.facingMode[0] ? "front" : "back"), r.deviceId && (e = r.deviceId)
                }
                this.#e.stream = t, this.#e.current = e, this.#n.mirrored = "front" == n, await this.#l(), this.#u(t, e)
            }
        }
        async disconnect() {
            this.#h()
        }
        addEventListener(t, e) {
            this.#e.emitter.on(t, e)
        }
        #o() {
            "BarcodeDetector" in window && !this.#t.useFallback ? this.#p() : "Worker" in window && "WebAssembly" in window && this.#d()
        }
        #p() {
            const t = new BarcodeDetector;
            this.#e.detector = async e => {
                let n = await t.detect(e),
                    r = [];
                for (let t of n) {
                    let e = null;
                    switch (t.format) {
                        case "ean_8":
                            e = "ean8";
                            break;
                        case "ean_13":
                            e = "ean13";
                            break;
                        case "upc_a":
                            e = "upca";
                            break;
                        case "upc_e":
                            e = "upce";
                            break;
                        case "code_39":
                            e = "code39";
                            break;
                        case "code_93":
                            e = "code93";
                            break;
                        case "code_128":
                            e = "code128";
                            break;
                        case "codabar":
                            e = "codabar";
                            break;
                        case "itf":
                            e = "interleaved-2-of-5";
                            break;
                        case "aztec":
                            e = "aztec-code";
                            break;
                        case "data_matrix":
                            e = "data-matrix";
                            break;
                        case "qr_code":
                            e = "qr-code";
                            break;
                        case "pdf417":
                            e = "pdf417"
                    }
                    r.push({
                        value: t.rawValue,
                        symbology: e,
                        polygon: t.cornerPoints,
                        raw: t
                    })
                }
                return r
            }
        }
        async #d() {
            let t = !1;
            if (this.#t.useWorker) {
                let e = await fetch(this.#t.workerPath),
                    n = URL.createObjectURL(new Blob([await e.text()], {
                        type: "application/javascript"
                    }));
                try {
                    const e = new Worker(n, {
                        type: "module"
                    });
                    e.addEventListener("error", (e => {
                        console.log("Failed to create worker, using main thread for barcode detection, is your workerPath set correctly?"), t = !0
                    }));
                    let r = w(e);
                    await r.initialize({
                        binaryPath: this.#t.binaryPath
                    }), this.#f(r.decodeBarcode)
                } catch (e) {
                    console.log("Failed to create worker, using main thread for barcode detection, is your workerPath set correctly?", e), t = !0
                }
            }
            this.#t.useWorker && !t || (X({
                locateFile: (t, e) => t.endsWith(".wasm") ? this.#t.binaryPath : e + t
            }), this.#f(q))
        }
        #f(t) {
            let e, n, r, i = document.createElement("canvas");
            this.#e.detector = async o => {
                let s = [];
                r ? e == o.videoWidth && n == o.videoHeight || (e = i.width = o.videoWidth, n = i.height = o.videoHeight, r.reset()) : (e = i.width = o.videoWidth, n = i.height = o.videoHeight, r = i.getContext("2d", {
                    willReadFrequently: !0
                }));
                try {
                    let i;
                    try {
                        r.drawImage(o, 0, 0, e, n), i = r.getImageData(0, 0, e, n)
                    } catch (t) {
                        return r.reset(), []
                    }
                    let a = await t(i, {
                        maxNumberOfSymbols: 1
                    });
                    if (a && a.length)
                        for (let t of a) {
                            if (t.error) continue;
                            let e = null;
                            switch (t.format) {
                                case "Aztec":
                                    e = "aztec-code";
                                    break;
                                case "Codabar":
                                    e = "codabar";
                                    break;
                                case "Code39":
                                    e = "code39";
                                    break;
                                case "Code93":
                                    e = "code93";
                                    break;
                                case "Code128":
                                    e = "code128";
                                    break;
                                case "DataBar":
                                    e = "gs1-databar-omni";
                                    break;
                                case "DataBarExpanded":
                                    e = "gs1-databar-expanded";
                                    break;
                                case "DataMatrix":
                                    e = "data-matrix";
                                    break;
                                case "EAN-8":
                                    e = "ean8";
                                    break;
                                case "EAN-13":
                                    e = "ean13";
                                    break;
                                case "ITF":
                                    e = "interleaved-2-of-5";
                                    break;
                                case "MaxiCode":
                                    e = "maxicode";
                                    break;
                                case "QRCode":
                                    e = "qr-code";
                                    break;
                                case "PDF417":
                                    e = "pdf417";
                                    break;
                                case "UPCA":
                                    e = "upca";
                                    break;
                                case "UPCE":
                                    e = "upce";
                                    break;
                                case "MicroQRCode":
                                case "RMQRCode":
                                    e = "qr-code-micro";
                                    break;
                                case "DXFilmEdge":
                                    e = "dx-film-edge"
                            }
                            e && s.push({
                                value: t.text,
                                symbology: e,
                                polygon: [{
                                    x: t.position.topLeft.x,
                                    y: t.position.topLeft.y
                                }, {
                                    x: t.position.topRight.x,
                                    y: t.position.topRight.y
                                }, {
                                    x: t.position.bottomRight.x,
                                    y: t.position.bottomRight.y
                                }, {
                                    x: t.position.bottomLeft.x,
                                    y: t.position.bottomLeft.y
                                }],
                                raw: t
                            })
                        }
                } catch (t) {
                    throw console.error(t), t
                }
                return s
            }
        }
        async #c() {
            let t = 0;
            for (; null == this.#e.detector && (await new Promise((t => setTimeout(t, 100))), t++, !(t > 10)););
        }
        async #l() {
            let t = await navigator.mediaDevices.enumerateDevices();
            for (let e of t)
                if ("videoinput" == e.kind) {
                    let t = "front";
                    if (e.getCapabilities) {
                        let n = e.getCapabilities();
                        t = n.facingMode && 0 != n.facingMode.length && "user" != n.facingMode[0] ? "back" : "front"
                    }

                    var index = this.#e.devices.findIndex(e2 => e2.deviceId == e.deviceId);

                    if (index === -1) {
                        this.#e.devices.push({
                            label: e.label,
                            deviceId: e.deviceId,
                            location: t
                        })
                    }
                }
        }
        async #u(t, e) {
            let n, r;
            for (let e of t.getVideoTracks()) {
                e.getSettings() && (n = e.getSettings().width, r = e.getSettings().height)
            }
            this.#e.width = n, this.#e.height = r, Ve && ("normal" === this.#e.orientation ? (this.#e.width = Math.min(n, r), this.#e.height = Math.max(n, r)) : (this.#e.width = Math.max(n, r), this.#e.height = Math.min(n, r))), this.#e.video = document.createElement("video"), this.#e.video.playsInline = !0, this.#e.video.controls = !1, this.#e.video.srcObject = t, this.#e.video.addEventListener("loadedmetadata", (() => {
                this.#e.video.play()
            })), this.#e.video.addEventListener("play", (() => {
                this.#n.playing = !0
            })), this.#e.emitter.emit("connected", {
                type: "webcam",
                deviceId: e
            }), this.#v(), this.#t.preview.enabled && (this.#g(), this.#r.video = await this.#m(t))
        }
        async #y(t) {
            let e = this.#e.devices.find((e => e.deviceId == t)),
                n = this.#e.stream,
                r = this.#r.video;
            this.#t.preview.enabled && Ge ? this.#w(this.#r.video) : r.style.zIndex = 2, this.#n.playing = !1, this.#n.mirrored = "front" == e.location;

            let te = n.getTracks();
            for (let ee of te) ee.stop()

            let i = {
                    width: this.#t.resolution.width,
                    height: this.#t.resolution.height,
                    deviceId: t,
                },
                o = await navigator.mediaDevices.getUserMedia({
                    video: i
                });

                this.#e.emitter.emit("change", i)

            if (o && (this.#e.stream = o, this.#e.current = t, this.#e.video.srcObject = o, this.#t.preview.enabled)) {
                this.#r.video = await this.#m(o), await Promise.race([new Promise((t => this.#r.video.addEventListener("play", t, {
                    once: !0
                }))), new Promise((t => setTimeout(t, We)))]), await new Promise((t => setTimeout(t, 50))), await this.#b(r);
                let t = n.getTracks();
                for (let e of t) e.stop()
            }
        }
        async #h() {
            if (this.#r.video && await this.#x(), this.#n.playing = !1, this.#e.video && (this.#e.video.remove(), this.#e.video = null), this.#e.stream) {
                let t = this.#e.stream.getTracks();
                for (let e of t) e.stop();
                this.#e.stream = null
            }
            this.#e.current = null, this.#e.emitter.emit("disconnected")
        }
        #g() {
            let t = this.#t.preview.size,
                e = this.#e.height / this.#e.width * this.#t.preview.size;
            this.#e.width < this.#e.height && (e = this.#t.preview.size, t = this.#e.width / this.#e.height * this.#t.preview.size), this.#r.width = t, this.#r.height = e;
            let n = document.createElement("div");
            n.classList.add("webcam-barcode-scanner-preview"), n.style.opacity = 0, n.style.transition = "opacity 0.4s", n.style.position = "fixed", n.style.width = `${this.#r.width}px`, n.style.height = `${this.#r.height}px`, n.style.borderRadius = `${this.#t.preview.radius}px`, n.style.overflow = "hidden", n.style.zIndex = this.#t.preview.zIndex, n.style.backgroundColor = "black";
            let r = "number" != typeof this.#t.preview.padding ? this.#t.preview.padding : {
                top: this.#t.preview.padding,
                right: this.#t.preview.padding,
                bottom: this.#t.preview.padding,
                left: this.#t.preview.padding
            };
            switch (this.#t.preview.position) {
                case "top-left":
                    n.style.top = `${r.top}px`, n.style.left = `${r.left}px`;
                    break;
                case "top-right":
                    n.style.top = `${r.top}px`, n.style.right = `${r.right}px`;
                    break;
                case "bottom-left":
                    n.style.bottom = `${r.bottom}px`, n.style.left = `${r.left}px`;
                    break;
                case "bottom-right":
                    n.style.bottom = `${r.bottom}px`, n.style.right = `${r.right}px`
            }
            if (this.#t.preview.draggable) {
                let t, e, i, o, s, a, c = {
                        x: 0,
                        y: 0
                    },
                    l = t => {
                        c.x += t.dx, c.y += t.dy, t.target.style.transform = `translate(${c.x}px, ${c.y}px)`
                    },
                    u = async l => {
                        let u = l.pageX < window.innerWidth >> 1 ? "left" : "right",
                            h = l.pageY < window.innerHeight >> 1 ? "top" : "bottom";
                        t = e = i = o = "auto", "left" == u ? (e = `${r.left}px`, s = r.left) : (o = `${r.right}px`, s = window.innerWidth - l.target.clientWidth - r.right), "top" == h ? (t = `${r.top}px`, a = r.top) : (i = `${r.bottom}px`, a = window.innerHeight - l.target.clientHeight - r.bottom);
                        let p = [{
                                transform: `translate(${s-l.target.offsetLeft}px,${a-l.target.offsetTop}px`
                            }],
                            d = l.target.animate(p, {
                                duration: 150
                            });
                        await d.finished, n.style.inset = `${t} ${o} ${i} ${e}`, n.style.transform = "", c.x = 0, c.y = 0
                    };
                Pe(".webcam-barcode-scanner-preview").draggable({
                    listeners: {
                        move: l,
                        end: u
                    }
                })
            }
            if (this.#t.preview.hud) {
                let t = document.createElement("canvas");
                t.width = this.#e.width, t.height = this.#e.height, t.style.width = `${this.#r.width}px`, t.style.height = `${this.#r.height}px`, t.style.position = "absolute", t.style.zIndex = 100, t.style.pointerEvents = "none", n.appendChild(t), this.#r.hud = t.getContext("2d")
            }

            let b = document.createElement("button");
            b.type = 'button';
            b.style.position = "absolute", b.style.right = "10px", b.style.top = "10px", b.style.zIndex = 102, b.style.width = "30px", b.style.height = "30px", b.style.cursor = "pointer", b.style.background = "#ffffff", b.style.display = "flex", b.style.alignItems = "center",b.style.justifyContent = "center",b.style.borderRadius = "6px";
            b.innerHTML = '<svg aria-hidden="true" class="w-5 h-5" fill="currentColor" stroke="none" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" stroke="none"></path></svg>';

            b.addEventListener("click", (() => {
                this.#h()
            })), n.appendChild(b);

            let i = document.createElement("select");
            i.style.position = "absolute", i.style.zIndex = 102, i.style.width = "30px", i.style.height = "30px", i.style.opacity = 0, i.style.cursor = "pointer", i.style.appearance = "none";
            for (let t of this.#e.devices) {
                let e = document.createElement("option");
                e.value = t.deviceId, e.text = t.label, i.appendChild(e)
            }
            i.addEventListener("change", (() => {
                this.#y(i.value)
            })), n.appendChild(i);
            let o = document.createElement("div");
            o.style.position = "absolute", o.style.zIndex = 101, o.style.top = "5px", o.style.left = "5px", o.style.width = "20px", o.style.height = "20px", o.style.fontSize = "14px", o.style.display = "flex", o.style.justifyContent = "center", o.style.alignItems = "center", o.style.backgroundColor = "#666666aa", o.style.color = "white", o.style.borderRadius = "50%", o.style.pointerEvents = "none", o.textContent = "▾", n.appendChild(o), document.body.appendChild(n), this.#r.container = n, this.#t.preview.hud && this.#T()
        }
        async #a() {
            if (!this.#r.container) return;
            this.#n.changing = !0;
            let t = 0 === screen.orientation.angle ? "normal" : "rotated",
                [e, n] = [this.#r.width, this.#r.height],
                [r, i] = [this.#e.width, this.#e.height];
            this.#e.orientation != t && ([e, n] = [n, e], [r, i] = [i, r]), this.#r.container.style.width = `${e}px`, this.#r.container.style.height = `${n}px`;
            let o = this.#r.container.querySelector("canvas");
            o && (o.width = r, o.height = i, o.style.width = `${e}px`, o.style.height = `${n}px`);
            let s = this.#r.container.querySelector("video");
            s && (s.width = e, s.height = n), await new Promise((t => setTimeout(t, 500))), this.#E(), this.#n.changing = !1
        }
        async #P() {
            await new Promise((t => setTimeout(t, 50))), this.#r.container.style.opacity = 1
        }
        async #x() {
            this.#r.container && (this.#r.container.style.opacity = 0, await new Promise((t => this.#r.container.ontransitionend = t)), this.#r.container.remove()), this.#r.container = null, this.#r.video = null
        }
        #E() {
            this.#r.polygons.clear()
        }
        #T() {
            let t = Date.now();
            for (let [e, n] of this.#r.polygons) t - n.timestamp > 300 && this.#r.polygons.delete(e);
            let e = this.#r.polygons.values(),
                n = this.#r.hud.canvas.width,
                r = this.#r.hud.canvas.height;
            if (this.#r.hud.clearRect(0, 0, n, r), !this.#n.changing) {
                this.#r.hud.strokeStyle = "lime", this.#r.hud.lineWidth = 8;
                for (let {
                        polygon: t
                    }
                    of e) {
                    if (this.#r.hud.beginPath(), this.#n.mirrored) {
                        this.#r.hud.moveTo(n - t[0].x, t[0].y);
                        for (let e = 1; e < t.length; e++) this.#r.hud.lineTo(n - t[e].x, t[e].y);
                        this.#r.hud.lineTo(n - t[0].x, t[0].y)
                    } else {
                        this.#r.hud.moveTo(t[0].x, t[0].y);
                        for (let e = 1; e < t.length; e++) this.#r.hud.lineTo(t[e].x, t[e].y);
                        this.#r.hud.lineTo(t[0].x, t[0].y)
                    }
                    this.#r.hud.closePath(), this.#r.hud.stroke()
                }
            }
            this.#r.container && requestAnimationFrame((() => this.#T()))
        }
        async #m(t) {
            let e = document.createElement("video");
            return e.playsInline = !0, e.controls = !1, e.width = this.#r.container.clientWidth, e.height = this.#r.container.clientHeight, e.srcObject = t, e.style.position = "absolute", e.style.zIndex = 1, e.style.display = "none", this.#n.mirrored && this.#t.preview.mirrored && (e.style.transform = "scaleX(-1)"), e.addEventListener("loadedmetadata", (() => {
                e.play()
            })), this.#r.container.appendChild(e), await Promise.race([new Promise((t => e.addEventListener("play", t, {
                once: !0
            }))), new Promise((t => setTimeout(t, We)))]), e.style.display = "block", this.#P(), e
        }
        async #w(t) {
            this.#n.changing = !0;
            let e = document.createElement("canvas");
            e.width = t.width * window.devicePixelRatio, e.height = t.height * window.devicePixelRatio, this.#n.mirrored && this.#t.preview.mirrored && (e.style.transform = "scaleX(-1)"), e.style.position = "absolute", e.style.width = `${t.width}px`, e.style.height = `${t.height}px`, e.style.borderRadius = `${this.#t.preview.radius}px`, e.style.zIndex = 99, e.style.backgroundColor = "black", this.#r.container.appendChild(e), e.getContext("2d").drawImage(t, 0, 0, t.width * window.devicePixelRatio, t.height * window.devicePixelRatio), await new Promise((t => setTimeout(t, We))), e.style.transition = "opacity 0.4s", e.style.opacity = 0, await new Promise((t => e.ontransitionend = t)), e.remove(), this.#n.changing = !1
        }
        async #b(t) {
            return t && (t.style.transition = "opacity 0.4s", t.style.opacity = 0, await new Promise((e => t.ontransitionend = e)), t.remove()), null
        }
        #v() {
            this.#i.time = Date.now(), setInterval((() => {
                this.#i.scans > 0 && (this.#t.debug && console.log(`Scanned ${this.#i.scans} barcodes in ${Date.now()-this.#i.time}ms (average ${this.#i.scans/(Date.now()-this.#i.time)*1e3} scans/s`), this.#i.time = Date.now(), this.#i.scans = 0)
            }), 5e3);
            let t = async () => {
                if (this.#n.playing) {
                    let t = await this.#e.detector(this.#e.video);
                    if (t.length)
                        for (let e of t) this.#C(e);
                    this.#i.scans++
                } else this.#i.time = Date.now(), this.#i.scans = 0;
                requestAnimationFrame(t)
            };
            requestAnimationFrame(t)
        }
        #C(t) {
            if (this.#t.preview.enabled && this.#t.preview.hud && t.polygon && this.#r.polygons.set(t.value, {
                    timestamp: Date.now(),
                    polygon: t.polygon
                }), this.#e.history.has(t.value)) return;
            if (this.#e.history.set(t.value, Date.now()), this.#t.allowedSymbologies.length && !this.#t.allowedSymbologies.includes(t.symbology)) return;
            this.#t.beepOnScan && this.#$();
            let e = {
                value: t.value,
                symbology: t.symbology,
                bytes: [new Uint8Array(t.value.split("").map((t => t.charCodeAt(0))))]
            };
            t.raw?.symbologyIdentifier && (e.aim = t.raw.symbologyIdentifier);
            let n = l.parse(e);
            n && (e.data = n), this.#t.debug && (e.debug = t), this.#e.emitter.emit("barcode", e)
        }
        #s() {
            setInterval((() => {
                let t = Date.now();
                for (let [e, n] of this.#e.history) t - n > 2e3 && this.#e.history.delete(e)
            }), 2e3)
        }
        #$() {
            "suspended" == this.#e.audio.state && this.#e.audio.resume();
            let t = this.#e.audio.createOscillator(),
                e = this.#e.audio.createGain();
            t.connect(e), t.frequency.value = 2800, t.type = "square", e.connect(this.#e.audio.destination), e.gain.value = 1, t.start(this.#e.audio.currentTime), t.stop(this.#e.audio.currentTime + .08)
        }
    }
}));
//# sourceMappingURL=webcam-barcode-scanner.umd.js.map
